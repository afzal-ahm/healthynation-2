<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;
use PhonePe\Env;
use PhonePe\payments\v2\standardCheckout\StandardCheckoutClient;
use PhonePe\payments\v2\models\request\builders\StandardCheckoutPayRequestBuilder;
use PhonePe\common\exceptions\PhonePeException;

class PhonepayController extends Controller
{
    private const FORMSUBMIT_EMAIL = 'healthynationlab@gmail.com';

    private function getPhonePeClient(): StandardCheckoutClient
    {
        $clientId      = env('PHONEPE_CLIENT_ID');
        $clientSecret  = env('PHONEPE_CLIENT_SECRET');
        $clientVersion = (int) env('PHONEPE_CLIENT_VERSION', 1);
        $environment   = Env::PRODUCTION;

        return StandardCheckoutClient::getInstance(
            $clientId,
            $clientVersion,
            $clientSecret,
            $environment
        );
    }

    public function phonePe(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:30',
            'address' => 'required|string|max:500',
            'payment_method' => 'required|in:COD,Online',
            'selectedPrices' => 'required|numeric|min:0',
            'selected_items' => 'required|string',
            'slot_date' => 'required|date',
            'slot_time' => 'required|string|max:255',
            'slot_price' => 'required|numeric|min:0',
        ]);

        $formData = [
            'name' => $validated['name'],
            'number' => $validated['number'],
            'address' => $validated['address'],
            'payment_method' => $validated['payment_method'],
            'selectedPrices' => (string) $validated['selectedPrices'],
            'selected_items' => $validated['selected_items'],
            'slot_date' => $validated['slot_date'],
            'slot_time' => $validated['slot_time'],
            'slot_price' => (string) $validated['slot_price'],
            'print_report' => $request->has('print_report') ? 'Yes' : 'No',
        ];

        $totalAmount             = (int) round(((float) $validated['selectedPrices']) * 100);
        $formData['totalAmount'] = $totalAmount;

        if ($request->input('payment_method') == 'Online') {

            $merchantOrderId             = 'ORD-' . uniqid();
            $formData['merchantOrderId'] = $merchantOrderId;

            session(['paymentData' => $formData]);

            try {
                $phonepeClient = $this->getPhonePeClient();

                $payRequest = StandardCheckoutPayRequestBuilder::builder()
                    ->merchantOrderId($merchantOrderId)
                    ->amount($totalAmount)
                    ->redirectUrl(route('response'))
                    ->build();

                $payResponse = $phonepeClient->pay($payRequest);

                if ($payResponse->getState() === 'PENDING') {
                    return redirect()->to($payResponse->getRedirectUrl());
                }

                Log::error('PhonePe unexpected state: ' . $payResponse->getState());
                return redirect(url('/cart'))->with('error', 'Payment could not be initiated. Please try again.');

            } catch (PhonePeException $e) {
                Log::error('PhonePe Exception: ' . $e->getMessage());
                return redirect(url('/cart'))->with('error', 'Payment error: ' . $e->getMessage());
            }
        }

        // COD or offline payment
        session(['paymentData' => $formData]);
        $this->sendOrderNotification($formData);
        return redirect()->route('thankyou');
    }


    public function response(Request $request)
    {
        $paymentData = session('paymentData');

        if (!$paymentData || !isset($paymentData['merchantOrderId'])) {
            // FIXED: replaced route('indexPage') with url('/') since indexPage route does not exist
            return redirect(url('/'))->with('error', 'Payment session expired.');
        }

        try {
            $phonepeClient  = $this->getPhonePeClient();
            $statusResponse = $phonepeClient->getOrderStatus($paymentData['merchantOrderId']);
            $state          = $statusResponse->getState();

            Log::info('PhonePe status: ' . $state . ' | Order: ' . $paymentData['merchantOrderId']);

            if ($state !== 'COMPLETED') {
                // FIXED: replaced route('indexPage') with url('/cart') so user goes back to cart on failure
                return redirect(url('/cart'))->with('error', 'Payment not successful. Status: ' . $state);
            }

        } catch (PhonePeException $e) {
            Log::error('PhonePe status check failed: ' . $e->getMessage());
            return redirect(url('/cart'))->with('error', 'Payment verification failed: ' . $e->getMessage());
        }

        $this->sendOrderNotification($paymentData);

        return view('thankyou', ['paymentData' => $paymentData]);
    }

    public function thankYou()
    {
        $paymentData = session('paymentData');

        if (!$paymentData) {
            return redirect(url('/cart'))->with('error', 'Order details not found.');
        }

        return view('thankyou', ['paymentData' => $paymentData]);
    }


    public function downloadPDF()
    {
        $paymentData = session('paymentData');

        if (!$paymentData) {
            return redirect(url('/'));
        }

        $pdf = Pdf::loadView('table_pdf', ['paymentData' => $paymentData]);
        $pdf->setPaper('A4', 'portrait');
        $pdf->set_option('isHtml5ParserEnabled', true);
        $pdf->set_option('isPhpEnabled', true);

        return $pdf->download('payment_details.pdf');
    }

    private function sendOrderNotification(array $paymentData): void
    {
        if (!empty($paymentData['formsubmit_sent'])) {
            return;
        }

        $payload = [
            'name' => $paymentData['name'] ?? '',
            'phone_number' => $paymentData['number'] ?? '',
            'address' => $paymentData['address'] ?? '',
            'payment_mode' => $paymentData['payment_method'] ?? '',
            'item_name_list' => $paymentData['selected_items'] ?? '',
            'slot_date' => $paymentData['slot_date'] ?? '',
            'slot_time' => $paymentData['slot_time'] ?? '',
            'slot_price' => $paymentData['slot_price'] ?? '',
            'print_report' => $paymentData['print_report'] ?? 'No',
            'total_amount' => $paymentData['selectedPrices'] ?? '',
            'merchant_order_id' => $paymentData['merchantOrderId'] ?? 'COD-' . now()->format('YmdHis'),
            '_subject' => 'Healthy Nation Lab Order',
            '_template' => 'table',
            '_captcha' => 'false',
        ];

        try {
            $response = Http::acceptJson()
                ->asForm()
                ->timeout(15)
                ->post('https://formsubmit.co/ajax/' . self::FORMSUBMIT_EMAIL, $payload);

            Log::info('FormSubmit order notification response received.', [
                'status' => $response->status(),
                'success' => $response->json('success'),
                'merchant_order_id' => $payload['merchant_order_id'],
                'target_email' => self::FORMSUBMIT_EMAIL,
                'body' => $response->body(),
            ]);

            if ($response->failed() || $response->json('success') !== true) {
                Log::error('FormSubmit order notification failed.', [
                    'status' => $response->status(),
                    'success' => $response->json('success'),
                    'merchant_order_id' => $payload['merchant_order_id'],
                    'target_email' => self::FORMSUBMIT_EMAIL,
                    'body' => $response->body(),
                ]);
                return;
            }

            $paymentData['formsubmit_sent'] = true;
            session(['paymentData' => $paymentData]);
        } catch (\Throwable $exception) {
            Log::error('FormSubmit order notification exception: ' . $exception->getMessage());
        }
    }
}

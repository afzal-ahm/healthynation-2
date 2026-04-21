<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;
use PhonePe\Env;
use PhonePe\payments\v2\standardCheckout\StandardCheckoutClient;
use PhonePe\payments\v2\models\request\builders\StandardCheckoutPayRequestBuilder;
use PhonePe\common\exceptions\PhonePeException;

class PhonepayController extends Controller
{
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
        $formData = $request->only(['name', 'number', 'address', 'payment_method']);
        $formData['selectedPrices'] = $request->input('selectedPrices');
        $formData['print_report']   = $request->has('print_report') ? 'Yes' : 'No';

        $selectedPrice           = $request->input('selectedPrices');
        $totalAmount             = (int) $selectedPrice * 100;
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
}
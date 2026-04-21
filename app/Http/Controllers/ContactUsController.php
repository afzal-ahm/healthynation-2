<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validateWithBag('contactUs', [
            'contact_name'    => 'required|string|max:255',
            'contact_number'  => 'required|string|max:15',
            'contact_address' => 'required|string|max:255',
            'contact_message' => 'nullable|string|max:2000',
        ]);

        $to = 'healthynationlab@gmail.com';

        $data = [
            'name'    => $validated['contact_name'],
            'number'  => $validated['contact_number'],
            'address' => $validated['contact_address'],
            'message' => $validated['contact_message'] ?? '',
        ];

        try {
            Mail::send('email.contact-us', $data, function ($mail) use ($to, $data) {
                $mail->to($to)
                    ->subject('New Contact Us Message from ' . $data['name']);
            });
        } catch (\Throwable $exception) {
            Log::error('Contact us form mail send failed.', [
                'message' => $exception->getMessage(),
                'name' => $validated['contact_name'],
                'number' => $validated['contact_number'],
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('contact_error', 'Your message was received, but email sending is not working on the server right now. Please try again later or contact us by phone.');
        }

        return redirect()->back()->with('contact_success', 'Your message has been sent successfully!');
    }
}

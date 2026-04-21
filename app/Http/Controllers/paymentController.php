<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationMail;
use App\Mail\CodOrderMail;

class paymentController extends Controller
{
    public function handlePhoneOrder(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string',
            'number' => 'required|numeric',
            'address' => 'required|string',
            'payment_method' => 'required|string',
            'selectedPrices' => 'required|string',
        ]);

        // Check the payment method
        if ($validated['payment_method'] === 'Online') {
            // Handle Online Payment - Send an email confirmation
            Mail::to('healthynationlab@gmail.com')->send(new OrderConfirmationMail($validated));

            // Optionally handle the payment gateway for online payment here
            // Redirect to a "thank you" page or perform any other logic as needed
            return response()->json(['status' => 'success']);
        } 
        elseif ($validated['payment_method'] === 'COD') {
            // Handle COD Payment - Send a confirmation email or notification to the admin or customer
            Mail::to('healthynationlab@gmail.com')->send(new CodOrderMail($validated));

            // Redirect to the index page after handling the COD order
            return redirect()->route('indexPage'); // Replace with your actual route name
        }
    }
}


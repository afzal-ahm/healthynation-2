<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function sendotp(Request $request)
    {
      $request->validate([
     
        'contact' => 'required|email|regex:/^([0-9]{10}|[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/'

      ]);

      $otp = rand(100000, 999999);

      return response()->json(['success' => true, 'otp' => $otp]);

    }
}

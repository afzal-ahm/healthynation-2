<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function updateCart(Request $request)
    {
        // Ensure the cart_count is passed correctly
        $cartCount = $request->input('cart_count');
    
        // Store the updated cart count in the session
        session(['cart_count' => $cartCount]);
    
        // Optionally, return a response (e.g., success message)
        return response()->json(['cartCount' => $cartCount], 200);
    }

}

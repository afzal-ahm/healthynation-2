<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddpaymentController extends Controller
{
   public function addToCart(Request $request)
{
    // Get the time and price from the request
    $time = $request->input('time');
    $price = $request->input('price');

    // Add item to session
    $cart = session()->get('cart', []);
    $cart[] = ['time' => $time, 'price' => $price];
    session()->put('cart', $cart);
    
    return response()->json(['success' => true]);
}

public function removeFromCart(Request $request)
{
    // Get the time and price from the request
    $time = $request->input('time');
    $price = $request->input('price');

    // Remove item from session
    $cart = session()->get('cart', []);
    $cart = array_filter($cart, function($item) use ($time, $price) {
        return $item['time'] !== $time || $item['price'] !== $price;
    });
    session()->put('cart', array_values($cart));  // Reindex the array
    
    return response()->json(['success' => true]);
}
}

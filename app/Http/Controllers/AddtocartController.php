<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddtocartController extends Controller
{
    // Controller Method: addToCart
    public function addToCart(Request $request)
    {
        // Retrieve the current cart count from the session (default to 0 if not set)
        $cartCount = session('cart_count', 0);
    
        // Increment the cart count
        $cartCount++;
    
        // Update the session with the new cart count
        session(['cart_count' => $cartCount]);
    
        // Optionally, add the item to the cart items list
        // For example: Store item data in the session (or a database)
        $cartItems = session('cart_items', []);
        $cartItems[] = [
            'name' => $request->input('item_name'),
            'price' => $request->input('item_price'),
            'description' => $request->input('item_description'),
        ];
        session(['cart_items' => $cartItems]);
    
        // Return back or send a response
        return redirect()->back(); // or return response()->json(['cartCount' => $cartCount]);
    }

}

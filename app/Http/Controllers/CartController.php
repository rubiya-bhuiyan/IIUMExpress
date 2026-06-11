<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('foodItem')
            ->where('user_id', 1)
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item_id' => 'required|exists:food_items,id',
        ]);

        $cartItem = Cart::where('user_id', 1)
            ->where('food_item_id', $request->food_item_id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'user_id' => 1,
                'food_item_id' => $request->food_item_id,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Food added to cart.');
    }

    public function destroy($id)
    {
        $cartItem = Cart::where('user_id', 1)->findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first to view your cart.');
        }

        $cartItems = Cart::with('foodItem')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first before adding food to cart.');
        }

        $request->validate([
            'food_item_id' => 'required|exists:food_items,id',
        ]);

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('food_item_id', $request->food_item_id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'food_item_id' => $request->food_item_id,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Food added to cart.');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('id', $id)
            ->firstOrFail();

        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
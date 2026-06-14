<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodItem;
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

        $deliveryFee = 2; // fixed delivery fee

        return view('cart', compact('cartItems', 'deliveryFee'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first to add items to cart.');
        }

        $request->validate([
            'food_item_id' => 'required|exists:food_items,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $quantity = $request->quantity ?? 1;

        // Check if the food item is already in cart
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('food_item_id', $request->food_item_id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'food_item_id' => $request->food_item_id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Food added to cart!');
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);

        if ($cartItem->user_id != Auth::id()) {
            abort(403);
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
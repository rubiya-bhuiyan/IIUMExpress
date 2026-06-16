<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first before checkout.');
        }

        $request->validate([
            'payment_method' => 'required|string',
        ]);

        $cartItems = Cart::with('foodItem')
            ->where('user_id', Auth::id())
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect('/cart')->with('error', 'Your cart is empty.');
        }

        $subtotal = 0;

        foreach ($cartItems as $item) {
            $subtotal += $item->foodItem->price * $item->quantity;
        }

        $deliveryFee = 2.00;
        $totalAmount = $subtotal + $deliveryFee;

        $order = Order::create([
            'user_id' => Auth::id(),
            'payment_method' => $request->payment_method,
            'subtotal' => $subtotal,
            'delivery_fee' => $deliveryFee,
            'total_amount' => $totalAmount,
            'status' => 'Pending',
        ]);

        Cart::where('user_id', Auth::id())->delete();

        return redirect('/order-success?order_id=' . $order->id);
    }
}

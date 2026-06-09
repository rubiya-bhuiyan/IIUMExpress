<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderDetails.foodItem')
            ->where('user_id', Auth::id())
            ->get();

        return view('orders.index', compact('orders'));
    }

    public function store()
    {
        $cartItems = Cart::with('foodItem')
            ->where('user_id', Auth::id())
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->foodItem->price * $item->quantity;
        });

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        foreach ($cartItems as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'food_item_id' => $item->food_item_id,
                'quantity' => $item->quantity,
                'price' => $item->foodItem->price,
            ]);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    public function show($id)
    {
        $order = Order::with('orderDetails.foodItem', 'payment')
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}

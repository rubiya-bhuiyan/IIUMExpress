<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('order')
            ->whereHas('order', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->get();

        return view('payments.index', compact('payments'));
    }

    public function store(Request $request, $orderId)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($orderId);

        Payment::create([
            'order_id' => $order->id,
            'amount' => $order->total_amount,
            'payment_method' => $request->payment_method ?? 'wallet',
            'payment_status' => 'paid',
        ]);

        $order->update([
            'status' => 'paid',
        ]);

        return redirect()->back()->with('success', 'Payment completed successfully.');
    }

    public function show($id)
    {
        $payment = Payment::with('order')
            ->whereHas('order', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->findOrFail($id);

        return view('payments.show', compact('payment'));
    }
}

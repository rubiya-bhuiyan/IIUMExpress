<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Rating;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function create($orderId)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first to rate your order.');
        }

        $order = Order::where('user_id', Auth::id())
            ->where('status', 'Delivered')
            ->findOrFail($orderId);

        $foods = FoodItem::all();

        return view('rate-order', compact('order', 'foods'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login first to submit a review.');
        }

        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'food_item_id' => 'required|exists:food_items,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        Order::where('user_id', Auth::id())
            ->where('status', 'Delivered')
            ->findOrFail($request->order_id);

        Rating::create([
            'user_id' => Auth::id(),
            'food_item_id' => $request->food_item_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect('/profile')->with('success', 'Review submitted successfully.');
    }
}

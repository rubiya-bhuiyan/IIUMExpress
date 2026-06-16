<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FoodItem;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin-dashboard', [
            'totalUsers' => User::count(),
            'totalFoods' => FoodItem::count(),
            'totalCategories' => Category::count(),
            'totalCarts' => Cart::count(),
            'totalMessages' => Message::count(),
            'totalOrders' => Order::count(),
            'recentFoods' => FoodItem::with('category')->latest()->take(5)->get(),
        ]);
    }

    public function foods()
    {
        $foods = FoodItem::with('category')->get();
        $categories = Category::all();

        return view('admin-foods', compact('foods', 'categories'));
    }

    public function storeFood(Request $request)
    {
        FoodItem::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
        ]);

        return redirect()->back()->with('success', 'Food item added successfully.');
    }

    public function updateFood(Request $request, $id)
    {
        $food = FoodItem::findOrFail($id);

        $food->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
        ]);

        return redirect()->back()->with('success', 'Food item updated successfully.');
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('admin-users', compact('users'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('admin-categories', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function carts()
    {
        $carts = Cart::with(['user', 'foodItem'])->latest()->get();
        return view('admin-carts', compact('carts'));
    }

    public function assistance()
    {
        $messages = Message::with('sender')->latest()->get();
        return view('admin-assistance', compact('messages'));
    }

    public function orders()
    {
        $orders = Order::with('user')->latest()->get();
        return view('admin-orders', compact('orders'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}
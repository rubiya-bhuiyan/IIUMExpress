<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RatingController;
use App\Models\Order;
use App\Models\Message;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/logout', function () {
    Auth::logout();

    return redirect('/login')
        ->with('success', 'You have been successfully signed out.');
})->name('logout');

Route::get('/profile', function () {
    if (!Auth::check()) {
        return redirect('/login')->with('error', 'Please login first to view your profile.');
    }

    $orders = Order::where('user_id', Auth::id())->latest()->get();
    $messages = Message::where('sender_id', Auth::id())->latest()->get();

    return view('profile', compact('orders', 'messages'));
})->name('profile');

Route::get('/menu', [FoodController::class, 'index'])->name('menu.index');

Route::get('/rate-order/{orderId}', [RatingController::class, 'create'])
    ->name('ratings.create');

Route::post('/ratings/store', [RatingController::class, 'store'])
    ->name('ratings.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');

Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');

Route::view('/order-success', 'order-success')->name('order.success');

Route::get('/track-order/{id}', function ($id) {
    $order = Order::findOrFail($id);
    return view('track-order', compact('order'));
})->name('track.order');

Route::get('/assistance', function () {
    return view('assistance');
})->name('assistance');

Route::post('/assistance', [MessageController::class, 'submitAssistance'])
    ->name('assistance.submit');

Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/admin/users', [AdminController::class, 'users'])
    ->name('admin.users');

Route::get('/admin/foods', [AdminController::class, 'foods'])
    ->name('admin.foods');

Route::post('/admin/foods/store', [AdminController::class, 'storeFood'])
    ->name('admin.foods.store');

Route::post('/admin/foods/update/{id}', [AdminController::class, 'updateFood'])
    ->name('admin.foods.update');

Route::get('/admin/categories', [AdminController::class, 'categories'])
    ->name('admin.categories');

Route::post('/admin/categories/store', [AdminController::class, 'storeCategory'])
    ->name('admin.categories.store');

Route::post('/admin/categories/update/{id}', [AdminController::class, 'updateCategory'])
    ->name('admin.categories.update');

Route::get('/admin/carts', [AdminController::class, 'carts'])
    ->name('admin.carts');

Route::get('/admin/assistance', [AdminController::class, 'assistance'])
    ->name('admin.assistance');

Route::get('/admin/orders', [AdminController::class, 'orders'])
    ->name('admin.orders');

Route::post('/admin/orders/update/{id}', [AdminController::class, 'updateOrder'])
    ->name('admin.orders.update');
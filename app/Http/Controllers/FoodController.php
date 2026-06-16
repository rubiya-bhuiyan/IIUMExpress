<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $foods = FoodItem::with(['category', 'ratings']);

        if ($request->filled('category')) {
            $foods->where('category_id', $request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;

            $foods->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        $foods = $foods->get();

        return view('menu', compact('foods', 'categories'));
    }
}
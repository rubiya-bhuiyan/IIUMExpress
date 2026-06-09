<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = FoodItem::with('category')->get();
        return view('menu', compact('foods'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('foods.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string',
        ]);

        FoodItem::create($request->all());

        return redirect()->back()->with('success', 'Food item added successfully.');
    }

    public function show($id)
    {
        $food = FoodItem::with('category')->findOrFail($id);
        return view('foods.show', compact('food'));
    }

    public function edit($id)
    {
        $food = FoodItem::findOrFail($id);
        $categories = Category::all();

        return view('foods.edit', compact('food', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $food = FoodItem::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string',
        ]);

        $food->update($request->all());

        return redirect()->back()->with('success', 'Food item updated successfully.');
    }

    public function destroy($id)
    {
        $food = FoodItem::findOrFail($id);
        $food->delete();

        return redirect()->back()->with('success', 'Food item deleted successfully.');
    }
}

@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Food Management</h2>
            <p class="text-muted">Add new foods and update existing menu items.</p>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success">
            Back to Dashboard
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-5 mb-5">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Add New Food Item</h4>

            <form action="{{ route('admin.foods.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Food Name</label>
                        <input type="text" name="name" class="form-control rounded-4" placeholder="Mango Smoothie" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Category</label>
                        <select name="category_id" class="form-control rounded-4" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Description</label>
                        <input type="text" name="description" class="form-control rounded-4" placeholder="Fresh blended mango drink">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Price RM</label>
                        <input type="number" step="0.01" name="price" class="form-control rounded-4" placeholder="6.00" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Image URL</label>
                        <input type="text" name="image" class="form-control rounded-4" placeholder="https://...">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success rounded-4">
                            Add Food Item
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-4">

        @foreach($foods as $food)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <img src="{{ $food->image ?: 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c' }}"
                         class="card-img-top rounded-top-5"
                         style="height:220px; object-fit:cover;"
                         alt="{{ $food->name }}">

                    <div class="card-body p-4">
                        <form action="{{ route('admin.foods.update', $food->id) }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Food Name</label>
                                <input type="text" name="name" value="{{ $food->name }}" class="form-control rounded-4">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Category</label>
                                <select name="category_id" class="form-control rounded-4">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $food->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea name="description" class="form-control rounded-4" rows="2">{{ $food->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Price RM</label>
                                <input type="number" step="0.01" name="price" value="{{ $food->price }}" class="form-control rounded-4">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Image URL</label>
                                <input type="text" name="image" value="{{ $food->image }}" class="form-control rounded-4">
                            </div>

                            <button type="submit" class="btn btn-success w-100 rounded-4">
                                Update Food
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>

@endsection
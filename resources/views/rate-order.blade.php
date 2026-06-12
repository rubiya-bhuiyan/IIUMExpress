@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow rounded-5 mx-auto" style="max-width: 750px;">
        <div class="card-body p-5">

            <div class="text-center mb-4">
                <div class="display-1">⭐</div>
                <h2 class="fw-bold">Rate Your Order</h2>
                <p class="text-muted">Order ID: #{{ $order->id }}</p>
            </div>

            <form action="{{ route('ratings.store') }}" method="POST">
                @csrf

                <input type="hidden" name="order_id" value="{{ $order->id }}">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Select Food Item</label>
                    <select name="food_item_id" class="form-control rounded-4 py-3" required>
                        <option value="">Choose food to review</option>
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}">
                                {{ $food->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Rating</label>
                    <select name="rating" class="form-control rounded-4 py-3" required>
                        <option value="">Select rating</option>
                        <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
                        <option value="4">⭐⭐⭐⭐ Good</option>
                        <option value="3">⭐⭐⭐ Average</option>
                        <option value="2">⭐⭐ Poor</option>
                        <option value="1">⭐ Bad</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Review</label>
                    <textarea name="review" class="form-control rounded-4" rows="4" placeholder="Write your review..."></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100 py-3 rounded-4">
                    Submit Review
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="/profile" class="btn btn-outline-success">
                    Back to Profile
                </a>
            </div>

        </div>
    </div>

</div>

@endsection
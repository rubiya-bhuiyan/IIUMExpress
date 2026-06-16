@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow rounded-5 mx-auto" style="max-width: 850px;">
        <div class="card-body p-5">

            <div class="text-center mb-5">
                <div class="display-1">📦</div>
                <h2 class="fw-bold">Track Your Order</h2>
                <p class="text-muted">View your latest order status.</p>
            </div>

            <div class="alert alert-success rounded-4">
                <h5 class="fw-bold mb-2">Order ID: #{{ $order->id }}</h5>
                <p class="mb-1">Payment Method: {{ $order->payment_method }}</p>
                <p class="mb-1">Subtotal: RM {{ number_format($order->subtotal, 2) }}</p>
                <p class="mb-1">Delivery Fee: RM {{ number_format($order->delivery_fee, 2) }}</p>
                <p class="mb-0">Total Amount: RM {{ number_format($order->total_amount, 2) }}</p>
            </div>

            <h4 class="fw-bold mt-5 mb-4">Order Status</h4>

            <div class="row text-center g-3">

                <div class="col-md-3">
                    <div class="p-4 rounded-4 {{ $order->status == 'Pending' ? 'bg-success text-white' : 'bg-light' }}">
                        <div class="fs-1">🟡</div>
                        <h6 class="fw-bold mt-2">Pending</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 rounded-4 {{ $order->status == 'Preparing' ? 'bg-success text-white' : 'bg-light' }}">
                        <div class="fs-1">👨‍🍳</div>
                        <h6 class="fw-bold mt-2">Preparing</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 rounded-4 {{ $order->status == 'Out For Delivery' ? 'bg-success text-white' : 'bg-light' }}">
                        <div class="fs-1">🚚</div>
                        <h6 class="fw-bold mt-2">Out For Delivery</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 rounded-4 {{ $order->status == 'Delivered' ? 'bg-success text-white' : 'bg-light' }}">
                        <div class="fs-1">✅</div>
                        <h6 class="fw-bold mt-2">Delivered</h6>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5">

                @if($order->status == 'Delivered')
                    <a href="{{ route('ratings.create', $order->id) }}" class="btn btn-warning px-4 me-2">
                        ⭐ Rate This Order
                    </a>
                @endif

                <a href="/menu" class="btn btn-success px-4 me-2">
                    Continue Ordering
                </a>

                <a href="/" class="btn btn-outline-success px-4">
                    Back to Home
                </a>

            </div>

        </div>
    </div>

</div>

@endsection
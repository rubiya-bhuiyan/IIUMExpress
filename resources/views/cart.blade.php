@extends('layouts.app')

@section('content')

<section class="py-5" style="background: linear-gradient(135deg, #f3fff7, #fff7ef);">
    <div class="container">
        <span class="badge bg-success-subtle text-success px-3 py-2 mb-3">
            Shopping Cart
        </span>

        <h1 class="display-5 fw-bold">
            Review Your <span style="color:#008f45;">Order</span>
        </h1>

        <p class="text-muted">
            Check your selected meals before proceeding to checkout.
        </p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success rounded-4">
                {{ session('success') }}
            </div>
        @endif

        @if($cartItems->isEmpty())
            <div class="bg-white rounded-4 shadow-sm p-5 text-center">
                <h4 class="fw-bold">Your cart is empty</h4>
                <p class="text-muted">Browse the menu and add your favourite meals.</p>
                <a href="/menu" class="btn btn-main">
                    Browse Menu
                </a>
            </div>
        @else

        <div class="row g-4">
            <div class="col-lg-8">

                @foreach($cartItems as $item)
                    <div class="bg-white rounded-4 shadow-sm p-4 mb-3">
                        <div class="row align-items-center">

                            <div class="col-md-2">
                                <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b"
                                     class="img-fluid rounded-4"
                                     style="height:90px; object-fit:cover;"
                                     alt="Food">
                            </div>

                            <div class="col-md-5 mt-3 mt-md-0">
                                <h5 class="fw-bold mb-1">
                                    {{ $item->foodItem->name }}
                                </h5>
                                <p class="text-muted small mb-0">
                                    {{ $item->foodItem->description }}
                                </p>
                            </div>

                            <div class="col-md-2 mt-3 mt-md-0">
                                <span class="fw-bold">
                                    RM {{ number_format($item->foodItem->price, 2) }}
                                </span>
                            </div>

                            <div class="col-md-2 mt-3 mt-md-0">
                                <span class="badge bg-success-subtle text-success px-3 py-2">
                                    Qty: {{ $item->quantity }}
                                </span>
                            </div>

                            <div class="col-md-1 mt-3 mt-md-0 text-end">
                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach

                <a href="/menu" class="btn btn-outline-main mt-4">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
            </div>

            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-sm p-4 sticky-top" style="top:100px;">
                    <h4 class="fw-bold mb-4">Order Summary</h4>

                    @php
                        $subtotal = $cartItems->sum(function($item) {
                            return $item->foodItem->price * $item->quantity;
                        });

                        $deliveryFee = 2.00;
                        $total = $subtotal + $deliveryFee;
                    @endphp

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span>RM {{ number_format($subtotal, 2) }}</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Delivery Fee</span>
                        <span>RM {{ number_format($deliveryFee, 2) }}</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="fw-bold">Total</h5>
                        <h5 class="fw-bold text-success">
                            RM {{ number_format($total, 2) }}
                        </h5>
                    </div>

                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-main w-100 mb-3">
                            Proceed to Checkout
                        </button>
                    </form>

                    <p class="text-muted small text-center mb-0">
                        Secure payment and fast campus delivery.
                    </p>
                </div>
            </div>
        </div>

        @endif

    </div>
</section>

@endsection
@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold mb-4">Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cartItems) > 0)

        @php
            $subtotalTotal = 0;
            $deliveryFee = 2.00;
        @endphp

        @foreach($cartItems as $item)

            @php
                $subtotal = $item->foodItem->price * $item->quantity;
                $subtotalTotal += $subtotal;
            @endphp

            <div class="card border-0 shadow-sm rounded-5 mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">

                        <div class="col-md-2 text-center">
                            <img
                                src="{{ $item->foodItem->image ? $item->foodItem->image : 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c' }}"
                                alt="{{ $item->foodItem->name }}"
                                class="img-fluid rounded-4"
                                style="height:120px;width:120px;object-fit:cover;"
                            >
                        </div>

                        <div class="col-md-4">
                            <h3 class="fw-bold mb-2">{{ $item->foodItem->name }}</h3>
                            <p class="text-muted mb-0">{{ $item->foodItem->description }}</p>
                        </div>

                        <div class="col-md-2 text-center">
                            <h4 class="fw-bold text-success">
                                RM {{ number_format($item->foodItem->price, 2) }}
                            </h4>
                        </div>

                        <div class="col-md-2 text-center">
                            <span class="badge bg-success-subtle text-success px-3 py-2 fs-6">
                                Qty: {{ $item->quantity }}
                            </span>
                        </div>

                        <div class="col-md-2 text-center">
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger">
                                    🗑
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach

        @php
            $finalTotal = $subtotalTotal + $deliveryFee;
        @endphp

        <div class="card border-0 shadow rounded-5 mt-4">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Subtotal:</h5>
                    <h5 class="fw-bold mb-0">
                        RM {{ number_format($subtotalTotal, 2) }}
                    </h5>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Delivery Fee:</h5>
                    <h5 class="fw-bold mb-0">
                        RM {{ number_format($deliveryFee, 2) }}
                    </h5>
                </div>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold mb-0">Final Total:</h3>
                    <h2 class="fw-bold text-success mb-0">
                        RM {{ number_format($finalTotal, 2) }}
                    </h2>
                </div>

                <hr>

                <div class="text-end">
                    <a href="{{ route('checkout') }}" class="btn btn-success btn-lg px-5">
                        Proceed to Checkout
                    </a>
                </div>

            </div>
        </div>

    @else

        <div class="alert alert-info rounded-4">
            Your cart is empty.
        </div>

        <a href="/menu" class="btn btn-success">
            Browse Menu
        </a>

    @endif

</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="card shadow-lg border-0 mx-auto rounded-5" style="max-width: 850px;">
        <div class="card-body text-center p-5">

            <div class="display-1 mb-3">✅</div>

            <h1 class="fw-bold text-success">
                Order Successful
            </h1>

            <p class="fs-5 text-muted mt-3">
                Thank you for ordering with IIUMExpress.
            </p>

            @if(request('order_id'))
                <div class="alert alert-success rounded-4 mt-4">
                    <h5 class="fw-bold mb-2">
                        Your order has been successfully placed.
                    </h5>

                    <p class="mb-1">
                        Order ID: <strong>#{{ request('order_id') }}</strong>
                    </p>

                    <p class="mb-1">
                        Your food and drinks are now being prepared.
                    </p>

                    <p class="mb-0">
                        Delivery will be made shortly.
                    </p>
                </div>
            @endif

            <div class="mt-4">
                @if(request('order_id'))
                    <a href="/track-order/{{ request('order_id') }}" class="btn btn-success btn-lg px-4 me-2">
                        Track My Order
                    </a>
                @endif

                <a href="/" class="btn btn-outline-success btn-lg px-4 me-2">
                    Homepage
                </a>

                <a href="/logout" class="btn btn-outline-danger btn-lg px-4">
                    Sign Out
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
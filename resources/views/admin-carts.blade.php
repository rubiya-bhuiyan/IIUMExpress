@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Cart Records</h2>
            <p class="text-muted">Items added into customer carts.</p>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success">
            Back to Dashboard
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-5">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>Cart ID</th>
                            <th>User</th>
                            <th>Food Item</th>
                            <th>Quantity</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($carts as $cart)
                            <tr>
                                <td>{{ $cart->id }}</td>
                                <td>{{ $cart->user->name ?? 'Guest' }}</td>
                                <td>{{ $cart->foodItem->name ?? 'N/A' }}</td>
                                <td>{{ $cart->quantity }}</td>
                                <td>{{ $cart->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection
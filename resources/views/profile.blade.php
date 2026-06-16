@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="mb-5">
        <h2 class="fw-bold">My Profile</h2>
        <p class="text-muted">View your account information, order history, and assistance requests.</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-5 h-100">
                <div class="card-body p-4 text-center">
                    <div class="fs-1 mb-2">👤</div>
                    <h5 class="fw-bold">{{ Auth::user()->name }}</h5>
                    <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                    <small class="text-muted">
                        Member since {{ Auth::user()->created_at->format('d M Y') }}
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-5 h-100">
                <div class="card-body p-4 text-center">
                    <div class="fs-1 mb-2">📦</div>
                    <h6 class="text-muted">Total Orders</h6>
                    <h2 class="fw-bold text-success">{{ $orders->count() }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-5 h-100">
                <div class="card-body p-4 text-center">
                    <div class="fs-1 mb-2">📩</div>
                    <h6 class="text-muted">Assistance Requests</h6>
                    <h2 class="fw-bold text-success">{{ $messages->count() }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card border-0 shadow-sm rounded-5 mb-4">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Order History</h4>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Payment Method</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>RM {{ number_format($order->total_amount, 2) }}</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success px-3 py-2">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    <a href="/track-order/{{ $order->id }}" class="btn btn-sm btn-outline-success">
                                        Track
                                    </a>

                                    @if($order->status == 'Delivered')
                                        <a href="{{ route('ratings.create', $order->id) }}" class="btn btn-sm btn-warning">
                                            ⭐ Rate
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No orders yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-5">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4">My Assistance Requests</h4>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Message</th>
                            <th>Date Submitted</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-center text-muted">
                                    No assistance requests submitted.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection
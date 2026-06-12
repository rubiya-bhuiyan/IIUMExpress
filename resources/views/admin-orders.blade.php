@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Order Management</h2>
            <p class="text-muted">View customer orders and update delivery status.</p>
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

    <div class="card border-0 shadow-sm rounded-5">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Payment</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->user->name ?? 'N/A' }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>RM {{ number_format($order->total_amount, 2) }}</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success px-3 py-2">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>
                                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                        @csrf

                                        <div class="d-flex gap-2">
                                            <select name="status" class="form-control rounded-4">
                                                <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Preparing" {{ $order->status == 'Preparing' ? 'selected' : '' }}>Preparing</option>
                                                <option value="Out For Delivery" {{ $order->status == 'Out For Delivery' ? 'selected' : '' }}>Out For Delivery</option>
                                                <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                            </select>

                                            <button type="submit" class="btn btn-success rounded-4">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No orders found.
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
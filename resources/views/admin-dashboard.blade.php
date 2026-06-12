@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="mb-5">
        <h2 class="fw-bold">Admin Dashboard</h2>
        <p class="text-muted">Overview of IIUMExpress system data.</p>
    </div>

    <div class="row g-4 mb-5">

        <div class="col-md-3">
            <a href="{{ route('admin.users') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">👥</div>
                        <h6 class="text-muted mt-2">Total Users</h6>
                        <h2 class="fw-bold text-success">{{ $totalUsers }}</h2>
                        <small class="text-success">Click to view users</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.foods') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">🍽️</div>
                        <h6 class="text-muted mt-2">Food Items</h6>
                        <h2 class="fw-bold text-success">{{ $totalFoods }}</h2>
                        <small class="text-success">Click to manage foods</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.categories') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">📂</div>
                        <h6 class="text-muted mt-2">Categories</h6>
                        <h2 class="fw-bold text-success">{{ $totalCategories }}</h2>
                        <small class="text-success">Click to manage categories</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.carts') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">🛒</div>
                        <h6 class="text-muted mt-2">Cart Records</h6>
                        <h2 class="fw-bold text-success">{{ $totalCarts }}</h2>
                        <small class="text-success">Click to view carts</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.assistance') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">📩</div>
                        <h6 class="text-muted mt-2">Assistance Requests</h6>
                        <h2 class="fw-bold text-success">{{ $totalMessages }}</h2>
                        <small class="text-success">Click to view requests</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.orders') }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-5 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="fs-1">📦</div>
                        <h6 class="text-muted mt-2">Orders</h6>
                        <h2 class="fw-bold text-success">{{ $totalOrders }}</h2>
                        <small class="text-success">Click to manage orders</small>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="card border-0 shadow-sm rounded-5 mb-4">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Recent Food Items</h4>

            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Food Name</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($recentFoods as $food)
                        <tr>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->category->name ?? 'N/A' }}</td>
                            <td>RM {{ number_format($food->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-end">
        <a href="{{ route('admin.foods') }}" class="btn btn-success">
            Manage Food Items
        </a>

        <a href="/logout" class="btn btn-outline-danger">
            Sign Out
        </a>
    </div>

</div>

@endsection
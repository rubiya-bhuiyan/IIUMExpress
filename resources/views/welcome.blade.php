@extends('layouts.app')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <span class="badge bg-success-subtle text-success mb-3 px-3 py-2">
                    Fast • Fresh • Campus Delivery
                </span>

                <h1 class="display-4 fw-bold mb-3">
                    Order Your <span style="color:#008f45;">Favourite Food</span>
                    Around Campus
                </h1>

                <p class="lead text-muted mb-4">
                    IIUMExpress helps students order meals quickly and easily from nearby food sellers.
                    Browse menus, add food to cart, and enjoy a smooth campus food ordering experience.
                </p>

                <a href="/menu" class="btn btn-main me-2">
                    Browse Menu <i class="bi bi-arrow-right"></i>
                </a>

                <a href="/login" class="btn btn-outline-main">
                    Login / Register
                </a>
            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <div class="p-4 bg-white rounded-5 shadow">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
                         class="img-fluid rounded-4"
                         alt="Food image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title mb-2">Popular Categories</h2>
        <p class="text-muted mb-4">Browse food based on your favourite category.</p>

        <div class="row g-4">
            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🍚</div>
                    <h6 class="fw-bold mt-2">Rice</h6>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🍜</div>
                    <h6 class="fw-bold mt-2">Noodles</h6>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🍔</div>
                    <h6 class="fw-bold mt-2">Burgers</h6>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🥤</div>
                    <h6 class="fw-bold mt-2">Drinks</h6>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🍟</div>
                    <h6 class="fw-bold mt-2">Snacks</h6>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="text-center p-4 rounded-4 bg-light">
                    <div class="fs-1">🍰</div>
                    <h6 class="fw-bold mt-2">Desserts</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-2">Why Choose IIUMExpress?</h2>
        <p class="text-muted mb-4">Designed specially for students and campus food ordering.</p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="fs-1 text-success mb-3">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5 class="fw-bold">Fast Ordering</h5>
                    <p class="text-muted mb-0">
                        Students can browse food and place orders quickly through the web application.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="fs-1 text-success mb-3">
                        <i class="bi bi-bag-check"></i>
                    </div>
                    <h5 class="fw-bold">Easy Cart Management</h5>
                    <p class="text-muted mb-0">
                        Users can add, view, and manage selected food items before checkout.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="fs-1 text-success mb-3">
                        <i class="bi bi-star"></i>
                    </div>
                    <h5 class="fw-bold">User Feedback</h5>
                    <p class="text-muted mb-0">
                        Customers can rate food items and provide reviews to improve service quality.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

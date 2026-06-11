@extends('layouts.app')

@section('content')

<section class="py-5" style="background: linear-gradient(135deg, #f3fff7, #fff7ef);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge bg-success-subtle text-success px-3 py-2 mb-3">
                    Campus Food Menu
                </span>

                <h1 class="display-5 fw-bold">
                    Explore Meals Available on
                    <span style="color:#008f45;">IIUMExpress</span>
                </h1>

                <p class="text-muted mt-3">
                    Choose your favourite food, add it to cart, and enjoy a smooth ordering experience.
                </p>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="bg-white rounded-4 shadow-sm p-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-0" placeholder="Search food, drinks, snacks...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-main">All</button>
            <button class="btn btn-outline-main">🍚 Rice</button>
            <button class="btn btn-outline-main">🍔 Burgers</button>
            <button class="btn btn-outline-main">🥤 Drinks</button>
            <button class="btn btn-outline-main">🍟 Snacks</button>
            <button class="btn btn-outline-main">🍰 Desserts</button>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="section-title mb-1">Popular Today</h2>
                <p class="text-muted mb-0">Fresh picks recommended for IIUM students.</p>
            </div>

            <a href="/cart" class="btn btn-outline-main">
                View Cart <i class="bi bi-cart"></i>
            </a>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card food-card h-100">
                    <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b"
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Chicken Rice">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-success-subtle text-success">Rice</span>
                            <small class="text-warning">★★★★★</small>
                        </div>

                        <h5 class="fw-bold">Chicken Rice</h5>
                        <p class="text-muted small">Rice served with juicy chicken and special sauce.</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-success mb-0">RM 8.50</h5>
                            <button class="btn btn-main btn-sm">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card food-card h-100">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd"
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Burger">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-warning-subtle text-warning">Burger</span>
                            <small class="text-warning">★★★★☆</small>
                        </div>

                        <h5 class="fw-bold">Crispy Chicken Burger</h5>
                        <p class="text-muted small">Crispy chicken patty with lettuce and creamy sauce.</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-success mb-0">RM 9.00</h5>
                            <button class="btn btn-main btn-sm">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card food-card h-100">
                    <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19"
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Fried Rice">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-success-subtle text-success">Rice</span>
                            <small class="text-warning">★★★★☆</small>
                        </div>

                        <h5 class="fw-bold">Nasi Goreng Kampung</h5>
                        <p class="text-muted small">Traditional fried rice with spicy kampung flavour.</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-success mb-0">RM 7.50</h5>
                            <button class="btn btn-main btn-sm">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card food-card h-100">
                    <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97"
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Iced Milo">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-info-subtle text-info">Drinks</span>
                            <small class="text-warning">★★★★★</small>
                        </div>

                        <h5 class="fw-bold">Iced Milo</h5>
                        <p class="text-muted small">Cold chocolate malt drink, perfect for hot weather.</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-success mb-0">RM 3.50</h5>
                            <button class="btn btn-main btn-sm">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
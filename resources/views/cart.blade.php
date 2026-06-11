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
        <div class="row g-4">

            <div class="col-lg-8">
                <div class="bg-white rounded-4 shadow-sm p-4 mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b"
                                 class="img-fluid rounded-4"
                                 style="height:90px; object-fit:cover;"
                                 alt="Chicken Rice">
                        </div>

                        <div class="col-md-5 mt-3 mt-md-0">
                            <h5 class="fw-bold mb-1">Chicken Rice</h5>
                            <p class="text-muted small mb-0">Rice served with juicy chicken and sauce.</p>
                        </div>

                        <div class="col-md-2 mt-3 mt-md-0">
                            <span class="fw-bold">RM 8.50</span>
                        </div>

                        <div class="col-md-2 mt-3 mt-md-0">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-outline-secondary">-</button>
                                <input type="text" class="form-control text-center" value="1">
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                        </div>

                        <div class="col-md-1 mt-3 mt-md-0 text-end">
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 shadow-sm p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97"
                                 class="img-fluid rounded-4"
                                 style="height:90px; object-fit:cover;"
                                 alt="Iced Milo">
                        </div>

                        <div class="col-md-5 mt-3 mt-md-0">
                            <h5 class="fw-bold mb-1">Iced Milo</h5>
                            <p class="text-muted small mb-0">Cold chocolate malt drink.</p>
                        </div>

                        <div class="col-md-2 mt-3 mt-md-0">
                            <span class="fw-bold">RM 3.50</span>
                        </div>

                        <div class="col-md-2 mt-3 mt-md-0">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-outline-secondary">-</button>
                                <input type="text" class="form-control text-center" value="1">
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                        </div>

                        <div class="col-md-1 mt-3 mt-md-0 text-end">
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <a href="/menu" class="btn btn-outline-main mt-4">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
            </div>

            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-sm p-4 sticky-top" style="top:100px;">
                    <h4 class="fw-bold mb-4">Order Summary</h4>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span>RM 12.00</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Delivery Fee</span>
                        <span>RM 2.00</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="fw-bold">Total</h5>
                        <h5 class="fw-bold text-success">RM 14.00</h5>
                    </div>

                    <button class="btn btn-main w-100 mb-3">
                        Proceed to Checkout
                    </button>

                    <p class="text-muted small text-center mb-0">
                        Secure payment and fast campus delivery.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
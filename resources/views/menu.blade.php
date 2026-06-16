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
                <form action="{{ route('menu.index') }}" method="GET" class="bg-white rounded-4 shadow-sm p-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-0">
                            <i class="bi bi-search"></i>
                        </span>

                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               class="form-control border-0"
                               placeholder="Search food, drinks, snacks...">

                        <button class="btn btn-main" type="submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@if(session('success'))
    <div class="container mt-4">
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    </div>
@endif

<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('menu.index') }}" class="btn btn-main">
                All
            </a>

            @foreach($categories as $category)
                <a href="{{ route('menu.index', ['category' => $category->id]) }}" class="btn btn-outline-main">
                    {{ $category->name }}
                </a>
            @endforeach
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

            @forelse($foods as $food)
                @php
                    $averageRating = $food->ratings->avg('rating');
                    $reviewCount = $food->ratings->count();
                @endphp

                <div class="col-lg-3 col-md-6">
                    <div class="card food-card h-100">
                        <img src="{{ $food->image ?: 'https://images.unsplash.com/photo-1603133872878-684f208fb84b' }}"
                             class="card-img-top"
                             style="height:200px; object-fit:cover;"
                             alt="{{ $food->name }}">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-success-subtle text-success">
                                    {{ $food->category->name ?? 'Food' }}
                                </span>

                                <small class="text-warning">
                                    @if($averageRating)
                                        ⭐ {{ number_format($averageRating, 1) }}
                                    @else
                                        No rating
                                    @endif
                                </small>
                            </div>

                            <h5 class="fw-bold">{{ $food->name }}</h5>

                            <p class="text-muted small">
                                {{ $food->description }}
                            </p>

                            <p class="small text-muted mb-2">
                                {{ $reviewCount }} review{{ $reviewCount == 1 ? '' : 's' }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-success mb-0">
                                    RM {{ number_format($food->price, 2) }}
                                </h5>

                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="food_item_id" value="{{ $food->id }}">
                                    <button type="submit" class="btn btn-main btn-sm">
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="bg-white rounded-4 shadow-sm p-5 text-center">
                        <h4 class="fw-bold">No food items found</h4>
                        <p class="text-muted">Try another search keyword or category.</p>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</section>

@endsection
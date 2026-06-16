@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold mb-4">Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}
        </div>
    @endif

    @if($cartItems->count() > 0)
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Food Item</th>
                        <th>Price (RM)</th>
                        <th>Quantity</th>
                        <th>Subtotal (RM)</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>{{ $item->foodItem->name }}</td>
                            <td>{{ number_format($item->foodItem->price, 2) }}</td>
                            <td>
                                <form action="{{ route('cart.store') }}" method="POST" class="d-flex gap-2 align-items-center">
                                    @csrf
                                    <input type="hidden" name="food_item_id" value="{{ $item->food_item_id }}">
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control w-25">
                                    <button type="submit" class="btn btn-main btn-sm">
                                        Update
                                    </button>
                                </form>
                            </td>
                            <td>{{ number_format($item->foodItem->price * $item->quantity, 2) }}</td>
                            <td>
                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="3" class="fw-bold text-end">Delivery Fee</td>
                        <td colspan="2" class="fw-bold">RM {{ number_format($deliveryFee, 2) }}</td>
                    </tr>

                    <tr>
                        <td colspan="3" class="fw-bold text-end">Total</td>
                        <td colspan="2" class="fw-bold">
                            RM {{ number_format($cartItems->sum(fn($i) => $i->foodItem->price * $i->quantity) + $deliveryFee, 2) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-end mt-4">
            <a href="{{ route('checkout') }}" class="btn btn-success btn-lg rounded-4">
                Proceed to Checkout
            </a>
        </div>
    @else
        <div class="bg-white rounded-4 shadow-sm p-5 text-center">
            <h4 class="fw-bold">Your cart is empty</h4>
            <p class="text-muted">Browse the menu and add food items to start ordering.</p>
            <a href="{{ route('menu.index') }}" class="btn btn-main mt-3">
                Browse Menu
            </a>
        </div>
    @endif

</div>

@endsection
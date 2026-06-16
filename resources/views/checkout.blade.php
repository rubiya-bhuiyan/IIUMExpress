@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Choose Payment Method</h2>
        <p class="text-muted">Select your preferred payment option.</p>
    </div>

    <div class="row justify-content-center g-4">

        <div class="col-md-4">
            <div class="card shadow border-0 rounded-5 h-100">
                <div class="card-body text-center p-5">
                    <div class="fs-1 mb-3">🏦</div>
                    <h4 class="fw-bold">Online Banking</h4>

                    <button
                        class="btn btn-success mt-3"
                        onclick="document.getElementById('bankingSection').style.display='block';
                                 document.getElementById('ewalletSection').style.display='none';
                                 document.getElementById('codSection').style.display='none';">
                        Select
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 rounded-5 h-100">
                <div class="card-body text-center p-5">
                    <div class="fs-1 mb-3">📱</div>
                    <h4 class="fw-bold">E-Wallet</h4>

                    <button
                        class="btn btn-success mt-3"
                        onclick="document.getElementById('ewalletSection').style.display='block';
                                 document.getElementById('bankingSection').style.display='none';
                                 document.getElementById('codSection').style.display='none';">
                        Select
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 rounded-5 h-100">
                <div class="card-body text-center p-5">
                    <div class="fs-1 mb-3">💵</div>
                    <h4 class="fw-bold">Cash On Delivery</h4>

                    <button
                        class="btn btn-success mt-3"
                        onclick="document.getElementById('codSection').style.display='block';
                                 document.getElementById('bankingSection').style.display='none';
                                 document.getElementById('ewalletSection').style.display='none';">
                        Select
                    </button>
                </div>
            </div>
        </div>

    </div>

    <div id="bankingSection" style="display:none;" class="mt-5">
        <div class="card shadow border-0 rounded-5">
            <div class="card-body p-4">
                <h4 class="fw-bold mb-4">Online Banking Details</h4>

                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="payment_method" value="Online Banking">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Bank Name</label>
                        <select class="form-control rounded-4 py-3" required>
                            <option value="">Select Bank</option>
                            <option>Maybank</option>
                            <option>CIMB</option>
                            <option>Public Bank</option>
                            <option>RHB</option>
                            <option>Bank Islam</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Account Number</label>
                        <input type="text" class="form-control rounded-4 py-3" placeholder="Enter account number" required>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Pay Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div id="ewalletSection" style="display:none;" class="mt-5">
        <div class="card shadow border-0 rounded-5">
            <div class="card-body p-4">
                <h4 class="fw-bold mb-4">Select E-Wallet</h4>

                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">E-Wallet Provider</label>
                        <select name="payment_method" class="form-control rounded-4 py-3" required>
                            <option value="">Select E-Wallet</option>
                            <option value="Touch 'n Go eWallet">Touch 'n Go eWallet</option>
                            <option value="GrabPay">GrabPay</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Pay Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div id="codSection" style="display:none;" class="mt-5">
        <div class="card shadow border-0 rounded-5">
            <div class="card-body p-4 text-center">
                <h4 class="fw-bold mb-3">Cash On Delivery</h4>

                <p class="text-muted">
                    Please prepare exact payment when your order arrives.
                </p>

                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="payment_method" value="Cash On Delivery">

                    <button type="submit" class="btn btn-success">
                        Confirm Order
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
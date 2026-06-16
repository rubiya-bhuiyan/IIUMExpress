@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Need Assistance?</h2>
        <p class="text-muted">
            Submit your issue and our team will review it as soon as possible.
        </p>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            {{ session('success') }}

            <div class="mt-3">
                <a href="/" class="btn btn-success me-2">
                    Back to Home
                </a>

                <a href="/menu" class="btn btn-outline-success">
                    Continue Ordering
                </a>
            </div>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-5 mx-auto" style="max-width: 700px;">
        <div class="card-body p-5">

            <form action="{{ route('assistance.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Issue Type</label>
                    <select name="issue_type" class="form-control rounded-4 py-3" required>
                        <option value="">Select issue type</option>
                        <option>Order Problem</option>
                        <option>Payment Problem</option>
                        <option>Delivery Issue</option>
                        <option>Account Issue</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Your Message</label>
                    <textarea name="message" class="form-control rounded-4" rows="5" placeholder="Describe your issue..." required></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100 py-3 rounded-4">
                    Submit Assistance Request
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
@extends('layouts.app')

@section('content')

<section class="py-5" style="background: linear-gradient(135deg, #eafff1, #fff7ef); min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-10">
                <div class="row bg-white rounded-5 shadow overflow-hidden">

                    <div class="col-lg-5 d-none d-lg-flex align-items-center text-white p-5"
                         style="background: linear-gradient(135deg, #008f45, #00b864);">
                        <div>
                            <h1 class="fw-bold mb-3">Welcome to IIUMExpress</h1>
                            <p class="mb-4">
                                Login to order your favourite campus meals, manage your cart, and enjoy fast food delivery.
                            </p>
                            <p>🍽️ Fresh meals around campus</p>
                            <p>🛒 Easy cart and checkout</p>
                            <p>🚚 Quick campus delivery</p>
                        </div>
                    </div>

                    <div class="col-lg-7 p-5">
                        <div class="text-center mb-4">
                            <div class="fs-1 mb-2">🔐</div>
                            <h2 class="fw-bold">Welcome Back</h2>
                            <p class="text-muted">Login to continue ordering with IIUMExpress.</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success rounded-4">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger rounded-4">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       class="form-control rounded-4 py-3"
                                       placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password"
                                           class="form-control rounded-start-4 py-3"
                                           placeholder="Enter your password" required>

                                    <button type="button" class="btn btn-outline-secondary rounded-end-4"
                                            onclick="togglePassword()">
                                        <i class="bi bi-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            <button type="submit" class="btn btn-main w-100 py-3">
                                Login
                            </button>
                        </form>

                        <p class="text-center text-muted mt-4 mb-0">
                            Don't have an account?
                            <a href="/register" class="text-success fw-bold text-decoration-none">Register</a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (password.type === 'password') {
        password.type = 'text';
        eyeIcon.classList.remove('bi-eye');
        eyeIcon.classList.add('bi-eye-slash');
    } else {
        password.type = 'password';
        eyeIcon.classList.remove('bi-eye-slash');
        eyeIcon.classList.add('bi-eye');
    }
}
</script>

@endsection
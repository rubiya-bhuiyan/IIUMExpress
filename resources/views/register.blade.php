@extends('layouts.app')

@section('content')

<section class="py-5" style="background: linear-gradient(135deg, #eafff1, #fff7ef); min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5">
                <div class="bg-white rounded-5 shadow p-5">
                    <div class="text-center mb-4">
                        <div class="fs-1 mb-2">📝</div>
                        <h2 class="fw-bold">Create Account</h2>
                        <p class="text-muted">Register to start ordering with IIUMExpress.</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger rounded-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   class="form-control rounded-4 py-3"
                                   placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   class="form-control rounded-4 py-3"
                                   placeholder="Enter your email" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="registerPassword"
                                       class="form-control rounded-start-4 py-3"
                                       placeholder="Create password min 6 characters" required>

                                <button type="button" class="btn btn-outline-secondary rounded-end-4"
                                        onclick="toggleRegisterPassword()">
                                    <i class="bi bi-eye" id="registerEyeIcon"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-main w-100 py-3">
                            Register
                        </button>
                    </form>

                    <p class="text-center text-muted mt-4 mb-0">
                        Already have an account?
                        <a href="/login" class="text-success fw-bold text-decoration-none">
                            Login
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function toggleRegisterPassword() {
    const password = document.getElementById('registerPassword');
    const eyeIcon = document.getElementById('registerEyeIcon');

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
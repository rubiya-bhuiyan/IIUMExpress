<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIUMExpress</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-brand {
            font-weight: 800;
            color: #008f45 !important;
        }

        .brand-orange {
            color: #ff7a00;
        }

        .btn-main {
            background-color: #008f45;
            color: white;
            border-radius: 30px;
            padding: 10px 22px;
            font-weight: 600;
        }

        .btn-main:hover {
            background-color: #006f36;
            color: white;
        }

        .btn-outline-main {
            border: 1px solid #008f45;
            color: #008f45;
            border-radius: 30px;
            padding: 10px 22px;
            font-weight: 600;
        }

        .btn-outline-main:hover {
            background-color: #008f45;
            color: white;
        }

        .food-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .food-card:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-weight: 800;
            color: #222;
        }

        .footer {
            background-color: #004d28;
            color: white;
            padding: 30px 0;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            🍽️ IIUM<span class="brand-orange">Express</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-main" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container text-center">
        <h5 class="fw-bold">IIUMExpress</h5>
        <p class="mb-1">Fast and reliable food ordering for IIUM students.</p>
        <small>© 2026 IIUMExpress. All Rights Reserved.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
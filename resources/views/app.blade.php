<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero-section video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 100px 20px;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('image/logo.jpg') }}" alt="Logo" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login_in') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @include('sweetalert::alert')
    
    <div class="container mt-6">
        @yield('content')
    </div>

    
    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3">
        <div class="container">
        Destributed by <strong>Tesfalegn Petros</strong> <p>&copy; 2025 Online Voting System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@extends('app')

@section('title', 'Welcome')

@section('content')
    <!-- Hero Section -->
    <header class="hero-section">
        <video autoplay muted loop>
            <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 class="display-4">Welcome to the Online Voting System</h1>
            <p class="lead">Secure, fast, and transparent voting at your fingertips.</p>
            <a href="{{ route('login_in') }}" class="btn btn-primary btn-lg">Login to Vote</a>
            <a href="/register" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container text-center my-5">
        <h2 class="mb-4">Why Choose Our System?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h4>Secure & Encrypted</h4>
                    <p>Your votes are encrypted and protected against fraud.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h4>Fast & Reliable</h4>
                    <p>Instant results with a seamless voting experience.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h4>Accessible Anywhere</h4>
                    <p>Vote from any device, anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
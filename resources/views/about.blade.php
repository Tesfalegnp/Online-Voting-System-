@extends('app')

@section('title', 'About Us')

@section('content')
    @include('sweetalert::alert')
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    
    <style>
        /* Hero Section */
        .about-hero {
            position: relative;
            background: url('/assets/images/about-hero.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .about-hero::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .about-hero .hero-content {
            position: relative;
            z-index: 2;
        }
        .about-hero h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }
        .about-hero p {
            font-size: 20px;
        }
        
        /* Main About Content */
        .about-container {
            padding: 60px 20px;
            background: #f9f9f9;
            color: #333;
        }
        .about-section {
            margin-bottom: 50px;
        }
        .about-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        .about-section h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: #ff6f61;
            bottom: -5px;
            left: 0;
        }
        .about-section p {
            font-size: 18px;
            line-height: 1.8;
        }
        
        /* Mission, Vision, Values */
        .mvv-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }
        .mvv-box {
            flex: 1;
            min-width: 250px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .mvv-box h3 {
            font-size: 28px;
            color: #ff6f61;
            margin-bottom: 15px;
        }
        .mvv-box p {
            font-size: 16px;
        }
        
        /* Team Section */
        .team-container {
            margin-top: 40px;
        }
        .team-member {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 100%;
            height: auto;
        }
        .team-member .member-info {
            padding: 15px;
        }
        .team-member h4 {
            margin: 10px 0 5px;
            font-size: 22px;
        }
        .team-member p {
            font-size: 16px;
            color: #777;
        }
        
        @media (min-width: 768px) {
            .team-row {
                display: flex;
                gap: 30px;
            }
            .team-member {
                flex: 1;
            }
        }
    </style>
    
    <!-- Hero Banner -->
    <div class="about-hero">
        <div class="hero-content">
            <h1>About Us</h1>
            <p>Your trusted partner in innovation and excellence</p>
        </div>
    </div>
    
    <!-- About Content -->
    <div class="about-container container">
        <!-- Our Story -->
        <div class="about-section">
            <h2>Our Story</h2>
            <p>
                Founded with passion and driven by a desire to innovate, our company has evolved from a small startup into a leading force in the industry. Our journey has been fueled by commitment, hard work, and an unyielding dedication to excellence. We take pride in our past, and we are excited for the future as we continue to push the boundaries of what’s possible.
            </p>
        </div>
        
        <!-- Mission, Vision, Values -->
        <div class="about-section">
            <h2>Our Mission, Vision &amp; Values</h2>
            <div class="mvv-container">
                <div class="mvv-box">
                    <h3>Our Mission</h3>
                    <p>To empower our customers by providing innovative and reliable solutions that drive success and inspire progress.</p>
                </div>
                <div class="mvv-box">
                    <h3>Our Vision</h3>
                    <p>To be the most trusted partner in our industry, renowned for our forward-thinking approach and commitment to quality.</p>
                </div>
                <div class="mvv-box">
                    <h3>Our Values</h3>
                    <p>Integrity, Innovation, Customer-Centricity, and Teamwork. These values guide us in every decision we make.</p>
                </div>
            </div>
        </div>
        
        <!-- Meet Our Team -->
        <div class="about-section">
            <h2>Meet Our Team</h2>
            <div class="team-container">
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <img src="/assets/images/self.jpg" alt="Tesfalegn Petros">
                            <div class="member-info">
                                <h4>Tesfalegn Petros</h4>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <img src="/assets/images/team2.jpg" alt="Birhanu Kassa">
                            <div class="member-info">
                                <h4>Birhanu Kassa</h4>
                                <p>Chief Technology Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <img src="/assets/images/team3.jpg" alt="Michael Yonass">
                            <div class="member-info">
                                <h4>Michael Yonnass</h4>
                                <p>Chief Operating Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <img src="/assets/images/market.png" alt="Tadele Tadese">
                            <div class="member-info">
                                <h4>Tadele Tadese</h4>
                                <p>Chief Marketing Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection

@extends('app')

@section('title', 'Contact Us')

@section('content')
    @include('sweetalert::alert')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

    <style>
        .contact-container {
            padding: 60px 20px;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
        }
        .contact-header {
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
        }
        .contact-header h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .contact-header p {
            font-size: 20px;
        }
        .contact-details i {
            color: #ff6f61;
            margin-right: 10px;
        }
        .contact-details li {
            margin-bottom: 15px;
            font-size: 18px;
        }
        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .contact-form .form-control {
            border-radius: 5px;
        }
        .btn-send {
            background: #ff6f61;
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 5px;
            color: #fff;
            transition: background 0.3s ease;
        }
        .btn-send:hover {
            background: #ff4f4f;
        }
        @media (max-width: 768px) {
            .contact-container {
                padding: 30px 10px;
            }
        }
    </style>

    <div class="contact-container">
        <div class="container">
            <div class="contact-header">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Please fill out the form below or use our contact details to get in touch.</p>
            </div>
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="contact-form">
                        <form id="contactForm" method="POST" action="/contact">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-send">Send Message</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Details & Map -->
                <div class="col-md-6">
                    <div class="contact-details" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <h3>Get in Touch</h3>
                        <ul class="list-unstyled mt-4">
                            <li><i class="fas fa-map-marker-alt"></i>Goro, Addiss Ababa, Ethiopia</li>
                            <li><i class="fas fa-phone"></i>+251 916 225 842</li>
                            <li><i class="fas fa-envelope"></i>peterhope935@gmail.com</li>
                        </ul>
                        <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6919.91937370457!2d38.82414989327537!3d8.996668618980383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2sAddis%20Ababa!5e1!3m2!1sen!2set!4v1739854629899!5m2!1sen!2set"
                             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Scripts -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection

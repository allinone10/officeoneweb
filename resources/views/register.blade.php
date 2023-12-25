<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .login{
            background: url({{ asset('image/IMG-20231212-WA0018.jpg')}});
        }
        .lg-form{
            background: white;
        }
        .room-item img{
            width: 100px;
            height: 50px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
        }
    </style>
    <title>Office One | Register Now</title>
</head>
<body>
    <div class="container-xxl bg-white p-0 login">
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6"></div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp"  lg-form data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden lg-form">
                            <div class="position-relative text-center">
                                <img class="img-logo" src="{{ asset('image/gold-logo-o1[1]-b.png') }}" alt="">

                                <h4 class="mb-4 p-4">Welcome to <span class="text-uppercase subtitle">Office One </span>Co-Working Space</h4>
                                <h6 class="text-start text-uppercase section-title">Create Account</h6>
                            </div>
                            <div class="p-4 mt-2">
                                <form method="POST" action="{{ route('client.store') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('first_name') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('last_name') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="nic" name="nic" placeholder="Mobile Number" value="">
                                                <label for="nic">NIC</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('nic') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="YYYY/MM/DD" value="">
                                                <label for="birthday">Date of Birth</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('birthday') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="Mobile Number" value="">
                                                <label for="phone">Mobile</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('phone_no') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="land_line" name="land_line" placeholder="Land Line" value="">
                                                <label for="land_line">Land Line</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="">
                                                <label for="email">Your Email</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('email') }}</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="job" name="job" placeholder="Job" value="">
                                                <label for="land">Job Title</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('job') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" value="">
                                                <label for="password">Password</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('password') }}</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="cpassword" name="retype_password" placeholder="Confirm Password" value="">
                                                <label for="cpassword">Confirm Password</label>
                                            </div>
                                            <span class="form-text text-danger fw-bold">{{ $errors->first('retype_password') }}</span>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="submit" value="Register Now">Register Now</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            Have an Account ? <a class="" href="{{ route('login') }}">Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"></div>
                </div>
            </div>
        </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

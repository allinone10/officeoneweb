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
    <title>Office One</title>
</head>
<body>

    <div class="container-xxl bg-white p-0 login">
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-1 col-md-6"></div>
                    <div class="col-lg-10 col-md-6 wow fadeInUp"  lg-form data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden lg-form">
                            <div class="position-relative text-center">
                                <img class="img-logo" src="{{ asset('image/gold-logo-o1[1]-b.png') }}" alt="">

                                <h4 class="mb-4 p-4">Welcome to <span class="text-uppercase subtitle">Office One </span>Co-Working Space</h4>
                                @if (session('message'))
                                    <h6 class="text-start text-uppercase section-title">Not Found Workspace</h6>
                                @endif

                                @if (session('success'))
                                    <h6 class="text-start text-uppercase section-title">Booking Success</h6>
                                @endif
                            </div>
                            <div class="p-4 mt-2">
                                @if (session('message'))
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">SORRY!</h4>
                                        <p>{{ session('message') }}</p>
                                        <hr>
                                        <p class="mb-0">Please try to book another date</p>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">SUCCESS!</h4>
                                        <p>{{ session('success') }}</p>
                                        <hr>
                                        <p class="mb-0">We will send your reference number via SMS</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6"></div>
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

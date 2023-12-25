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
        .room-item .img-logo{
            width: 100px;
            height: 50px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
        }
    </style>
    <title>Office One | Select Package</title>
</head>
<body>

    <div class="container-xxl bg-white p-0 login">
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-1 col-md-6"></div>
                    <div class="col-lg-12 col-md-6 wow fadeInUp"  lg-form data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden lg-form step3">
                            <div class="position-relative text-center">
                                <img class="img-logo" src="{{ asset('image/gold-logo-o1[1]-b.png') }}" alt="">

                                <h4 class="mb-4 p-4">Welcome to <span class="text-uppercase subtitle">Office One </span>Co-Working Space</h4>
                                <h6 class="text-start text-uppercase section-title">Select Your Package</h6>
                            </div>
                            <div class="p-4 mt-2 select-package">
                                <form method="POST" action="{{ route('booking.send-package') }}" class="Workspace">
                                    @csrf
                                    <input type="hidden" name="workspace_id" id="workspace_id" value="{{ $workspace_id }}">
                                    <div class="row g-5">
                                        @foreach ($package as $pa)
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="room-item shadow rounded overflow-hidden ">
                                                    <div class="position-relative">
                                                        <input type="radio" class="option-input radio" name="package_id" value="{{ $pa->package_id }}"/>
                                                        <img class="img-fluid" src="{{ asset('image/IMG-20231212-WA0014.jpg') }}" alt="">
                                                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                                            Rs.{{ number_format($pa->price, 0) }} (1hour) <br>
                                                            <span class="subprice">Rs.1000/Additional hour</span>
                                                        </small>
                                                    </div>
                                                    <div class="p-4 mt-2">
                                                        <div class="justify-content-between mb-3">
                                                            <h5 class="mb-0">{{ $pa->package_name }}</h5>
                                                            <p class="ps-2 per-title">Per Hour</p>
                                                        </div>

                                                        <div class="d-flex mb-3">
                                                            <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                                            <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                                            <small><i class="fas fa-hamburger me-2"></i>Food</small>
                                                        </div>
                                                        <p class="text-body mb-3"></p>
                                                        <ul class="features text-body mb-3 ">
                                                            @foreach ($packageFeature as $pf)
                                                                @if ($pa->package_id == $pf->package_id)
                                                                    <li>
                                                                        <span class="list-name">{{ $pf->feature }}</span>
                                                                        @if ($pf->feature_status == 1)
                                                                            <span class="icon check"><i class="fas fa-check"></i></span>
                                                                        @else
                                                                            <span class="icon cross"><i class="fas fa-times"></i></span>
                                                                        @endif
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            <div class="col-lg-2 col-md-6 wow fadeInUp"></div>
                                        </div>
                                        <div class="col-3 text-center">

                                        </div>
                                        <div class="col-3 text-center"></div>
                                        <div class="col-3 text-center"></div>
                                        <div class="col-3">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Next</button>
                                        </div>
                                    </div>
                                </form>
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

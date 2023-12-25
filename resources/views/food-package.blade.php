<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Office One</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="{{ asset('src/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('src/custom-editors.js') }}"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Header Start -->
  <div class="container-fluid px-0 header">
    <div class="row gx-0">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="{{ asset('image/OO LOGO.png') }}">
            </a>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
              <img src="{{ asset('image/OO LOGO.png') }}">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
              <div class="navbar-nav mr-auto py-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
              </div>
              <a href="" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </nav>
        </div>
    </div>
</div>

<section class="main-content food-store">
    <div class="container">
      <div class="text-center wow fadeInUp py-5" data-wow-delay="0.1s">
        <h6 class="section-title text-center text-uppercase">Food Store</h6>
        <h1 class="mb-5">Explore <span class="text-uppercase subtitle">Foods Store</span></h1>
      </div>
      <div class="row mb-5">
        @foreach ($shop as $sp)
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route('order.food-gallery', $sp->shop_id) }}">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('image/tranding-food-1.png') }}"/>
                        </div>
                        <div class="card-info">
                            <p class="text-title">{{ $sp->shop_name}} </p>
                        </div>
                        {{-- <div class="card-footer">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="" for="flexRadioDefault1">
                                Select Store
                            </label>
                        </div> --}}
                    </div>
                </a>
            </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
  <!-- Footer Start -->
<div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s">
  <div class="container">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a class="border-bottom" href="#">Office One</a>, All Right Reserved.
                  Powered by <a class="border-bottom" href="https://allinoneholdings.com/">All In One Solutions</a>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                      <a href="">Home</a>
                      <a href="">Privacy</a>
                      <a href="">Help</a>
                      <a href="">FQAs</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->

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

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
            <a href="{{ route('welcome') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="{{ asset('image/OO LOGO.png') }}">
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0">
                <a href="{{ route('welcome') }}" class="navbar-brand d-block d-lg-none">
                    <img src="{{ asset('image/OO LOGO.png') }}">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </nav>
        </div>
    </div>
</div>

<section class="main-content food-menu">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-center text-uppercase">Our Food Items</h6>
      <h1 class="m2-5">Explore Our <span class="text-uppercase subtitle">Food Store</span></h1>
      <a href="{{ route('cart') }}">Go To Cart</a>
      @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Note!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
  </div>
    <div class="row">
        @foreach ($foods as $foo)
            <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="food-card">
                    <div class="food-card_img">
                        @if ($foo->image == NULL)
                            <img src="{{ asset('image/eii.png')}}" alt="Empty image">
                        @else
                            <img src="{{ env('OTHER_URL'). 'images.'. $foo->image }}" alt="{{ $foo->fp_description }}">
                        @endif
                    </div>
                    <div class="food-card_content">
                        <div class="food-card_title-section">
                            <a href="#!" class="food-card_title">{{ $foo->fp_description }}</a>
                            <a href="#!" class="food-card_author">{{ $foo->shop_name }}</a>
                        </div>
                        <div class="food-card_bottom-section">
                            <div class="space-between">
                                <div>
                                    {{-- <span class="fa fa-fire"></span> 220 - 280 Kcal --}}
                                </div>
                                <div class="pull-right">
                                    <span class="badge badge-success">Veg</span>
                                 </div>
                            </div>
                            <hr>
                            <form action="{{ route('order.add-to-cart', $foo->fp_id) }}" method="post">
                                @csrf
                                <div class="space-between">
                                    <div class="food-card_price">
                                        <span>Rs.{{ $foo->fp_price }}</span>
                                    </div>
                                    <div class="food-card_order-count">
                                        <div class="input-group mb-3">
                                            <p>
                                                <input type="number" name="qty" value="1"/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" name="addtocart" class="bg-warning btn text-white w-100" value="Add To Cart">Add To Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
<style>

body {
    background: #f9f9f9;
    font-family: "roboto", sans-serif;
}

.main-content {
    padding-top: 100px;
    padding-bottom: 100px;
}

a {
    text-decoration: none;
}

.food-card {
    background: #fff;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    -webkit-transition: 0.1s;
    transition: 0.1s;
}

.food-card:hover {
    -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.food-card .food-card_img {
    display: block;
    position: relative;
}

.food-card .food-card_img img {
    width: 100%;
    height: 200px;
    -o-object-fit: cover;
    object-fit: cover;
}

.food-card .food-card_img i {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 25px;
    -webkit-transition: all 0.1s;
    transition: all 0.1s;
}

.food-card .food-card_img i:hover {
    top: 18px;
    right: 28px;
    font-size: 29px;
}

.food-card .food-card_content {
    padding: 15px;
}

.food-card .food-card_content .food-card_title-section {
    height: 100px;
    overflow: hidden;
}

.food-card .food-card_content .food-card_title-section .food-card_title {
    font-size: 24px;
    color: #333;
    font-weight: 500;
    display: block;
    line-height: 1.3;
    margin-bottom: 8px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.food-card .food-card_content .food-card_title-section .food-card_author {
    font-size: 15px;
    display: block;
}

.food-card .food-card_content .food-card_bottom-section .space-between {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers {
    margin-left: 17px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers img,
.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
    height: 45px;
    width: 45px;
    border-radius: 45px;
    border: 3px solid #fff;
    margin-left: -17px;
    float: left;
    background: #f5f5f5;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
    position: relative;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count span {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 13px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_price {
    font-size: 28px;
    font-weight: 500;
    color: #F47A00;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count {
    width: 130px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count input {
    background: #f5f5f5;
    border-color: #f5f5f5;
    -webkit-box-shadow: none;
    box-shadow: none;
    text-align: center;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count button {
    border-color: #f5f5f5;
    border-width: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
}

@media (min-width: 992px) {
    .food-card--vertical {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        height: 235px;
    }

    .food-card--vertical .food-card_img img {
        width: 200px;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }
}
</style>
<script>
  $("input[type='number']").inputSpinner()
  $(".buttons-only").inputSpinner({buttonsOnly: true, autoInterval: undefined })
</script>
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

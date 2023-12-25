<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Office One</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
              <a href="{{ route('booking.workspcae') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </nav>
        </div>
    </div>
</div>

    <!-- Cart Start -->
    <div class="container-fluid" style="background: #fff;">
        <div class="row px-xl-5 py-5">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-lg-8 table-responsive mb-5">
                <div class="p-2">
                    <a href="{{ route('order.empty-cart') }}" class="">Empty Cart</a>
                </div>
                <table class="table table-borderless table-hover text-center mb-0">
                    <thead class="text-light bg-dark">
                        <tr>
                            <th>Products</th>
                            <th>Qty</th>
                            <th>Unit Price(Rs.)</th>
                            <th>Total(Rs.)</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle bg-light">
                        @if (session('cart'))
                            @foreach (session('cart') as $cart)
                                <tr>
                                    <td class="align-middle">
                                        @if ($cart['image'] == '')
                                            <img src="{{ asset('image/eii.png') }}" alt="" style="width: 50px;">
                                        @else
                                            <img src="{{ env('OTHER_URL'). 'images.'. $cart['image'] }}" alt="{{ $cart['image'] }}">
                                        @endif
                                        {{ $cart['fp_description'] }}
                                    </td>
                                    <td class="align-middle">
                                        <div class="mx-auto" style="width: 150px;">
                                            <form action="" method="post" class="d-flex">
                                                @csrf
                                                <button type="button" id="minus_{{$cart['fp_id']}}" onclick="minusQty(JSON.parse('{{$cart['fp_id']}}'))"><i class="fas fa-minus"></i></button>
                                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                                                <input type="number" name="qty" id="qty_{{$cart['fp_id']}}" class="form-control rounded-0" value="{{$cart['qty']}}" readonly />
                                                <button type="button" id="plus_{{$cart['fp_id']}}" onclick="plusQty(JSON.parse('{{ $cart['fp_id'] }}'))"><i class="fas fa-plus"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end">{{ number_format($cart['fp_price'], 2) }}</td>
                                    <td class="align-middle text-end">
                                        @php
                                            $totalPerItem = $cartTotal = 0;
                                            $totalPerItem = $cart['fp_price'] * $cart['qty'];
                                            $cartTotal += $cart['fp_price'] * $cart['qty'];
                                        @endphp
                                        {{ number_format($totalPerItem, 2) }}
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('order.delete', $cart['fp_id']) }}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else

                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4" style="background: #fff; border-radius: 10px;">
                <h5 class="position-relative text-uppercase mb-3 py-4">Cart Summary</h5>
                <div class="p-30 mb-5">
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $cart)
                            @php
                                $total += $cart['fp_price'] * $cart['qty'];
                                $count = count(session('cart'));
                            @endphp
                        @endforeach
                    @endif
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Items</h6>
                            <h6 class="font-weight-medium">{{ $count }}</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>Rs.{{ number_format($total, 2) }}</h5>
                        </div>
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="pb-2">
                                @if (session('cart'))
                                    @foreach (session('cart') as $cart)
                                        <input type="hidden" name="fp_id" value="{{ $cart['fp_id'] }}">
                                        <input type="hidden" name="qty" value="{{ $cart['qty'] }}">
                                        <input type="hidden" name="unit_price" value="{{ $cart['fp_price'] }}">
                                    @endforeach
                                @endif
                            </div>
                            <button type="submit" name="checkout" value="Checkout" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Order Now </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


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
  {{-- <script>
    $("input[type='number']").inputSpinner()
    $(".buttons-only").inputSpinner({buttonsOnly: true, autoInterval: undefined })
  </script> --}}
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/qty_counter.js') }}" type="text/javascript"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

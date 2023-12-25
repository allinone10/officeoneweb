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
    <title>Office One | My Profile</title>
</head>
<body>
    <!-- Header Start -->
    <div class="container-fluid px-0 header">
        <div class="row gx-0">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('welcome')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('image/OO LOGO.png') }}">
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0">
                    <a href="{{ route('welcome')}}" class="navbar-brand d-block d-lg-none">
                        <img src="{{ asset('image/OO LOGO.png') }}">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        {{-- <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="#aboutus" class="nav-item nav-link">About</a>
                            <a href="#pricing" class="nav-item nav-link">Pricing</a>
                            <a href="#testimonials" class="nav-item nav-link">Testimonials</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                            <a href="{{ route('profile') }}" class="nav-item nav-link">My Account</a>
                        </div> --}}
                        <a href="{{ route('booking.workspcae') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-xxl bg-white p-0 login">
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-6 wow fadeInUp"  lg-form data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden lg-form">
                            <div class="position-relative text-center">
                                <img class="img-logo" src="{{ asset('image/gold-logo-o1[1]-b.png') }}" alt="">

                                <h4 class="mb-4 p-4">Welcome to <span class="text-uppercase subtitle">Office One </span>Co-Working Space</h4>
                                <h6 class="text-start text-uppercase section-title">My Profile</h6>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="container-fluid">
                                    <!-- Page Heading -->
                                    <div class="d-flex justify-content-end" >
                                        <a href="{{ route('order.select-package') }}" class="btn btn-primary profile-button">Foods Order<i class="fa fa-utensils ms-3"></i></a>
                                    </div>
                                    <div class="row py-3">
                                        <div>
                                            <ul class="nav nav-tabs" id="myTab">
                                                <li class="nav-item">
                                                    <a href="#home" class="nav-link active" data-bs-toggle="tab" style="font-weight: bold; font-size: 20px;">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile" class="nav-link" data-bs-toggle="tab" style="font-weight: bold; font-size: 20px;">Bookings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#order" class="nav-link" data-bs-toggle="tab" style="font-weight: bold; font-size: 20px;">Food Orders</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane fade show active" id="home">
                                                    <div class="card shadow mb-4">
                                                        <div class="card-body">
                                                            <div class="container rounded bg-white mt-5 mb-5">
                                                                <div class="row">
                                                                    <div class="col-md-3 border-right">
                                                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                                            <img class="rounded-circle mt-5" width="100" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                                                            <span class="font-weight-bold">{{ $client->first_name}} {{ $client->last_name }}</span>
                                                                            <span class="text-black-50">{{ $client->email }}</span>
                                                                            <span> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9 border-right">
                                                                        <div class="p-3 py-5">
                                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                                <h4 class="text-right">Profile</h4>
                                                                            </div>
                                                                            <div class="row mt-2">
                                                                                <div class="col-md-6">
                                                                                    <label class="labels">First Name</label>
                                                                                    <input type="text" class="form-control" placeholder="first name" value="{{ $client->first_name }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="labels">Last Name</label>
                                                                                    <input type="text" class="form-control" value="{{ $client->last_name }}" placeholder="surname" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-md-6 mt-3">
                                                                                    <label class="labels">Mobile Number</label>
                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $client->phone_no }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-6 mt-3">
                                                                                    <label class="labels">Land Line</label>
                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $client->land_line }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-12 mt-3">
                                                                                    <label class="labels">NIC</label>
                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $client->nic }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-12 mt-3">
                                                                                    <label class="labels">Date Of Birth</label>
                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $client->birthday }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-12 mt-3">
                                                                                    <label class="labels">Email</label>
                                                                                    <input type="email" class="form-control" placeholder="" value="{{ $client->email }}" readonly>
                                                                                </div>
                                                                                <div class="col-md-12 mt-3">
                                                                                    <label class="labels">Job Title</label>
                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $client->job }}" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-md-12 mt-3">
                                                                                    {{-- <button class="btn btn-primary profile-button" type="button">Save</button> --}}
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            @foreach ($booking as $bk)
                                                                <div class="container rounded bg-white">
                                                                    <div class="row">
                                                                        <div class="card shadow mb-4">
                                                                            <div class="card-body">
                                                                                <div class="col-md-12 border-right">
                                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                                        <h4 class="text-right">{{ $bk->workspace_name }} </h4>
                                                                                        <span style="text-align: right;"></span>
                                                                                    </div>
                                                                                    <div class="d-flex mb-3 col-md-2 text-center d-flex justify-content-between align-items-center" style=" background: rgb(178, 245, 178);" >
                                                                                        @foreach ($payment as $pay)
                                                                                            @if ($bk->booking_id == $pay->booking_id)
                                                                                                <div>
                                                                                                    <a href="#" class="btn outline btn-xs" style="color: green;">
                                                                                                        <i class="fas fa-info-circle"></i>&nbsp; Paid
                                                                                                    </a>
                                                                                                    <div class="clearfix"></div>
                                                                                                </div>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                                <div class="">
                                                                                    <div class="row mt-2">
                                                                                        <div class="col-md-6  mt-2">
                                                                                            <img src="{{ env('OTHER_URL').'public/images/upload/'.$bk->image }}">
                                                                                        </div>
                                                                                        <div class="col-md-6  mt-2">
                                                                                            <div class="row mt-2">
                                                                                                <div class="col-md-6  mt-2">
                                                                                                    <label class="labels">Arrival Date</label>
                                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $bk->arrival_date }}" disabled>
                                                                                                </div>
                                                                                                <div class="col-md-6  mt-2">
                                                                                                    <label class="labels">Depature Date</label>
                                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $bk->depature_date }}" disabled>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row mt-2">
                                                                                                <div class="col-md-3  mt-2">
                                                                                                    <label class="labels">In Time</label>
                                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $bk->in_time }}" disabled>
                                                                                                </div>
                                                                                                <div class="col-md-3  mt-2">
                                                                                                    <label class="labels">Out Time</label>
                                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $bk->out_time }}" disabled>
                                                                                                </div>
                                                                                                <div class="col-md-6  mt-2">
                                                                                                    <label class="labels">Package</label>
                                                                                                    <input type="text" class="form-control" placeholder="" value="{{ $bk->package_name }}" disabled>
                                                                                                </div>
                                                                                                <div class="col-md-6 mt-2">
                                                                                                    @if ($bk->seat == "Seat")
                                                                                                        <label class="labels">Seat Numbers</label>
                                                                                                        <input type="text" class="form-control" placeholder="" value="{{ $bk->seat_numbers }}" disabled>
                                                                                                    @else

                                                                                                    @endif
                                                                                                </div>
                                                                                                @foreach ($payment as $pay)
                                                                                                    @if ($bk->booking_id == $pay->booking_id)
                                                                                                        <div class="col-md-6  mt-2">
                                                                                                            <label class="labels">Payments</label>
                                                                                                            <input type="text" class="form-control" placeholder="" value="{{ $pay->amount }}" disabled>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="order">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            @foreach ($order as $ord)
                                                                <div class="container rounded bg-white">
                                                                    <div class="row">
                                                                        <div class="card shadow mb-4">
                                                                            <div class="card-body">
                                                                                <div class="col-md-12 border-right">
                                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                                        <h4 class="text-right">Order ID: {{ $ord->order_id }} </h4><span style="text-align: right;"></span>
                                                                                    </div>
                                                                                    <div class="d-flex mb-3 col-md-2 text-center d-flex justify-content-between align-items-center" style=" background: rgb(178, 245, 178);" >
                                                                                        @if ($ord->order_status == 1)
                                                                                            <div>
                                                                                                <a href="#" class="btn outline btn-xs" style="color: red;"><i class="fas fa-info-circle"></i>&nbsp; Not Delivared</a>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                        @else
                                                                                            <div>
                                                                                                <a href="#" class="btn outline btn-xs" style="color: green;"><i class="fas fa-info-circle"></i>&nbsp; Delivared</a>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="">
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-6  mt-2">
                                                                                                <img src="{{ asset('image/IMG-20231212-WA0017.jpg') }}">
                                                                                            </div>
                                                                                            <div class="col-md-6  mt-2">
                                                                                                <div class="row mt-2">
                                                                                                    <div class="col-md-12  mt-2">
                                                                                                        <label class="labels">Ordered Foods List</label>
                                                                                                        @foreach ($orderList as $ol)
                                                                                                            @if ($ol->order_id == $ord->order_id)
                                                                                                                <input type="text" class="form-control mt-1" placeholder="" value="{{ $ol->fp_description }}" disabled>
                                                                                                            @endif
                                                                                                        @endforeach
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Payments</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="col-lg-12">
                                                        <div class="mb-3" class="col-lg-12">
                                                            <label for="exampleInputEmail1" class="form-label">Booking ID</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="exampleInputEmail1" class="form-label">Payment Type</label>
                                                            <select class="form-select" aria-label="Default select example">
                                                              <option selected>Open this select menu</option>
                                                              <option value="1">One</option>
                                                              <option value="2">Two</option>
                                                              <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3" class="col-lg-12">
                                                            <label for="exampleInputEmail1" class="form-label">Amount</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Pay</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

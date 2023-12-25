@extends('layouts.master')

@section('title', 'Office One')

@section('content')
<div class="container-xxl bg-white p-0 header">
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
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="#aboutus" class="nav-item nav-link">About</a>
                            <a href="#pricing" class="nav-item nav-link">Pricing</a>
                            <a href="#testimonials" class="nav-item nav-link">Testimonials</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                            <a href="{{ route('client.profile') }}" class="nav-item nav-link">My Account</a>
                            <a href="{{ route('client.sign-out') }}" class="nav-item nav-link">Sign Out</a>
                        </div>
                        <a href="{{ route('booking.workspcae') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('image/IMG-20231212-WA0017.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Flexible Workspace</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown text-uppercase">Office space your way</h1>
                            <a href="#pricing" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Packages</a>
                            <a href="{{ route('booking.workspcae') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/IMG-20231212-WA0018.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Flexible Workspace</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown text-uppercase">Office space your way</h1>
                            <a href="#pricing" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Packages</a>
                            <a href="{{ route('booking.workspcae') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/IMG-20231214-WA0007.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Flexible Workspace</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown text-uppercase">Office space your way</h1>
                            <a href="#pricing" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Packages</a>
                            <a href="{{ route('booking.workspcae') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/IMG-20231214-WA0009.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Flexible Workspace</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown text-uppercase">Office space your way</h1>
                            <a href="#pricing" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Packages</a>
                            <a href="{{ route('booking.workspcae') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="" style="padding: 10px;">
                <div class="row g-2">
                    <div class="col-md-12">
                        <div class="row g-2">
                            <div class="col-md-12">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <a class="service-item rounded" href="">
                                                <div class="service-icon bg-transparent border rounded p-1">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-wifi fa-2x"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Free Wifi</h5>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <a class="service-item rounded" href="">
                                                <div class="service-icon bg-transparent border rounded p-1">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="far fa-building fa-2x"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Flexible Workspace</h5>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <a class="service-item rounded" href="">
                                                <div class="service-icon bg-transparent border rounded p-1">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-print fa-2x"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Printer Access</h5>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                            <a class="service-item rounded" href="">
                                                <div class="service-icon bg-transparent border rounded p-1">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-utensils fa-2x"></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Foods</h5>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- About Start -->
    <div class="container-xxl py-5 about" id="aboutus">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-start text-uppercase section-title">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-uppercase subtitle">Office One</span></h1>
                    <p class="mb-4">Welcome to Office One Co-Working Space, where innovation meets colloboration, and your workspace is more than just a desk - It's a community-driven hub designed to elevate your professional experience.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">5</h2>
                                    <p class="mb-0">Workspace</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-chair fa-2x mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">15</h2>
                                    <p class="mb-0">Seats</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">10</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="#pricing">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('image/seat.jpg') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('image/img1.jpg') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('image/IMG-20231212-WA0008.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('image/img2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Room Start -->
    <div class="container-xxl py-5 packages" id="pricing">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-uppercase">Our Packages</h6>
                <h1 class="mb-5">Explore Our <span class="text-uppercase subtitle">Packages</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('image/IMG-20231212-WA0014.jpg') }}" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                Rs.3500 (1hour) <br>
                                <span class="subprice">Rs.1000/Additional hour</span>
                            </small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0">CEO Cabin</h5>
                                <p class="ps-2 per-title">Per Hour</p>
                            </div>

                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                <small><i class="fas fa-hamburger me-2"></i>Food</small>
                            </div>
                            <p class="text-body mb-3"></p>
                            <ul class="features text-body mb-3 ">
                                <li>
                                  <span class="list-name">AC</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Unlimited Wifi</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Printed Access</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Lunch Room</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Wash Room</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Discustion Table</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Private Space</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Bean Bags</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Lobby</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name"><br></span>
                                    <span class="icon check"></span>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between text-center">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('image/img1.jpg') }}" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                Rs.2500 (1hour) <br>
                                <span class="subprice">Rs.1000/Additional hour</span>
                            </small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0">Meeting Room</h5>
                                <p class="ps-2 per-title">Per Hour</p>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                <small><i class="fas fa-hamburger me-2"></i>Food</small>
                            </div>

                            <ul class="features text-body mb-3 ">
                                <li>
                                  <span class="list-name">AC</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Unlimited Wifi</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Printed Access</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Lunch Room</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Wash Room</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Discustion Table</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Private Space</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Bean Bags</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Lobby</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Remote Display</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between text-center">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('image/IMG-20231212-WA0014.jpg') }}" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                Rs.25000/Month <br>
                                <span class="subprice">(One time Payments)</span>
                            </small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0">Full Focus Package (Hot Desk)</h5>
                                <p class="ps-2 per-title">Per Person - Per Month</p>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                <small><i class="fas fa-hamburger me-2"></i>Food</small>
                            </div>

                            <ul class="features text-body mb-3 ">
                                <li>
                                  <span class="list-name">Unlimited Wifi</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Printed Access</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Lunch Room</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Wash Room</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Discustion Table</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Bean Bags</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Any Work consultation</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Access for Networking Events</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>

                                <li>
                                    <span class="list-name">Lobby</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name"><br></span>
                                    <span class="icon check"></span>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between text-center">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4" style="padding-top: 50px;">
                <div class="col-lg-2 col-md-6 wow fadeInUp"></div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('image/IMG-20231212-WA0014.jpg') }}" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                Rs.1500/day <br>
                            </small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0">Daylong Dedication Package (Hot Desk)</h5>
                                <p class="ps-2 per-title">Per Person - Per Day</p>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                <small><i class="fas fa-hamburger me-2"></i>Food</small>
                            </div>

                            <ul class="features text-body mb-3 ">
                                <li>
                                  <span class="list-name">Unlimited Wifi</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Printed Access</span>
                                  <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Lunch Room</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Wash Room</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Discustion Table</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Bean Bags</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Any Work consultation</span>
                                    <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Access for Networking Events</span>
                                    <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Lobby</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between text-center">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('image/IMG-20231212-WA0014.jpg') }}" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4 price">
                                Rs.500/hour <br>
                            </small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0">Hourly Harmony Package (Hot Desk)</h5>
                                <p class="ps-2 per-title">Per Person - Per hour</p>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-chair me-2"></i>Lobby</small>
                                <small><i class="fas fa-hamburger me-2"></i>Food</small>
                            </div>
                            <ul class="features text-body mb-3 ">
                                <li>
                                  <span class="list-name">Unlimited Wifi</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Printed Access</span>
                                  <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                  <span class="list-name">Lunch Room</span>
                                  <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Wash Room</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Discustion Table</span>
                                    <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Bean Bags</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Any Work consultation</span>
                                    <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Access for Networking Events</span>
                                    <span class="icon cross"><i class="fas fa-times"></i></span>
                                </li>
                                <li>
                                    <span class="list-name">Lobby</span>
                                    <span class="icon check"><i class="fas fa-check"></i></span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between text-center">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp"></div>
            </div>
        </div>
    </div>
    <!-- Room End -->

    <!-- Testimonial Start -->
    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" id="testimonials">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>I highly recommend Office-One to fellow professionals looking for a collaborative and vibrant workspace. The team's dedication to creating a positive experience for members is evident, and I look forward to continued membership.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('image/avatar.png') }}" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Mr. K. Thennakoon</h6>
                            <small>Software Developer</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>I highly recommend Office-One to fellow professionals looking for a collaborative and vibrant workspace. The team's dedication to creating a positive experience for members is evident, and I look forward to continued membership.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('image/avatar.png') }}" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Ms. T. Perera </h6>
                            <small>Web Developer</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>I highly recommend Office-One to fellow professionals looking for a collaborative and vibrant workspace. The team's dedication to creating a positive experience for members is evident, and I look forward to continued membership.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('image/avatar.png') }}" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Mr. C. Rathnayake</h6>
                            <small>Web Developer</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5 contact" id="contact">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-uppercase">Contact Us</h6>
                <h1 class="mb-5"><span class="text-uppercase subtitle">Get</span> In Touch</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-uppercase">Email</h6>
                            <p><i class="fa fa-envelope-open me-2"></i>info@allinoneholdings.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-uppercase">Phone</h6>
                            <p><i class="fa fa-phone-alt me-2"></i>081 2121051</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-uppercase">Address</h6>
                            <p><i class="fa fa-map-marker-alt me-2"></i>3rd Floor No 349, 2/1 Katugastota Rd, Kandy 20000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                   <iframe class="position-relative rounded w-100 h-100"
                        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=No.%2081/1/1%20A,%20Anagarika%20Dharmapala%20Mawatha,%20Kandy.%20Kandy+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form method="POST" action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="con_name" placeholder="Your Name" require>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Contact" name="con_phone" placeholder="Contact" require>
                                        <label for="subject">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="con_email" placeholder="Your Email" require>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here"  name="con_message"id="message" style="height: 150px" require></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection

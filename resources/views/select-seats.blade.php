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
    <title>Office One | Place Your Booking</title>
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
                            <h6 class="text-start text-uppercase section-title">Add Your Booking Details</h6>
                        </div>
                        <div class="p-4 mt-2">
                            <form method="POST" action="{{ route('booking.summery') }}" class="Workspace">
                                @csrf
                                <input type="hidden" name="workspace_id" value="{{ $workspace_id }}">
                                <input type="hidden" name="package_id" value="{{ $package_id }}">
                                <input type="hidden" name="client_id" value="{{ $user_data->client_id }}">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="arrival_date" name="arrival_date" placeholder="Arrival Date" value="{{ $arrival }}" readonly>
                                            <label for="arrival_date">Arrival Date</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="depature_date" name="depature_date" placeholder="Depature Date" value="{{ $depature }}" readonly>
                                            <label for="depature_date">Depature Date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="time" class="form-control" id="in_time" name="in_time" placeholder="In Time" value="{{ $in_time }}" readonly>
                                            <label for="in_time">In Time</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="time" class="form-control" id="out_time" name="out_time" placeholder="Out Time" value="{{ $out_time }}" readonly>
                                            <label for="out_time">Out Time</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if (count($seat) > 0)
                                            <label for="seat_numbers">Select Seat(Showing Available Seat Numbers)</label>
                                            <div class="form-floating">
                                                @for ($i = 0;$i < count($seat);$i++)
                                                    <input type="checkbox" data-name="{{ $seat[$i] }}" class="checkbox" id="seat" name="seat_numbers[]" value="{{ $seat[$i] }}" />
                                                @endfor
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-3 text-center">
                                        {{-- <button class="btn w-100 py-3 btn-light" type="submit" name="submit">Back</button> --}}
                                    </div>
                                    <div class="col-3 text-center"></div>
                                    <div class="col-3 text-center"></div>
                                    <div class="col-3">
                                        <button class="btn btn-primary w-100 py-3" type="submit" name="submit" value="Book Now">Book Now</button>
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

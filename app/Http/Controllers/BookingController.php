<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use DateTime;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Fetch all workspace details
     */
    public function fetchWorkspace()
    {
        $workspace = DB::table('workspace_details')
        ->select('*')
        ->get();

        return view('workspace', compact('workspace'));
    }

    /**
     * Send selected workspace id to package select page
     */
    public function packageSelect(Request $request)
    {
        $validate = $request->validate([
            'workspace_id' => ['required']
        ]);

        $ws_id = $request->get('workspace_id');

        return redirect()->route('booking.package', $ws_id);
    }

    /**
     * Package page
     */
    public function package(int $workspace_id)
    {

        // Fetch all package details
        $package = DB::table('packages')
        ->select('*')
        ->get();

        $packageFeature = DB::table('package_feature')
        ->select('*')
        ->get();

        return view('package', compact('workspace_id', 'package', 'packageFeature'));
    }

    /**
     *
     */
    public function sendPackage(Request $request)
    {
        $validate = $request->validate([
            'package_id' => ['required']
        ]);

        $workspace_id = $request->get('workspace_id');
        $package_id = $request->get('package_id');

        return redirect()->route('booking.search-availability', [$workspace_id, $package_id]);
    }

    /**
     *
     */
    public function placeBooking(int $workspace_id, int $package_id)
    {
        // Check related workspace have seat numbers
        $exitSeatNumbers = DB::table('workspace_seat')
        ->select(DB::raw('count(*) as count'))
        ->where('workspace_id', '=', $workspace_id)
        ->first();

        $seat = array();

        if($exitSeatNumbers->count > 0){
            // select realted workspace seat numbers
            $seat = DB::table('workspace_seat')
            ->select('*')
            ->where('workspace_id', '=', $workspace_id)
            ->get();
        }

        if(session()->has('loggedin')){
            $client = DB::table('client_login')
            ->select('*')
            ->where('client_id', '=', session('loggedin'))
            ->first();

            $user_data = $client;
        }

        return view('search-availability', compact('workspace_id', 'package_id', 'seat', 'user_data'));
    }

    /**
     * Search Availability
     */
    public function searchAvailability(Request $request)
    {
        $flag = false;
        $bookedDateArray = [];

        // Get the date difference between arrival and depature date
        $arrival = date_create($request->get('arrival_date'));
        $depature = date_create($request->get('depature_date'));
        $get_date_difference = date_diff($arrival, $depature);
        $date_diff = $get_date_difference->format('%R%a');

        // Create date range using date difference
        for ($i=0; $i <= $date_diff; $i++) {
            $start_date = $request->get('arrival_date');
            $date = new DateTime($start_date);
            $date->modify("+$i day");
            $date_range = $date->format('Y-m-d');

            // Check selected workspace booked each date range
            $bookedDates = DB::table('sheduale')
            ->select('*')
            ->where('workspace_id', '=', $request->get('workspace_id'))
            ->whereDate('sheduale_date', '=', $date_range)
            ->get();

            // Add all booked date to array
            foreach($bookedDates as $bd){
                $bookedDateArray[] = $bd->seat_no;
            }
        }

        // Remove same element of the array
        $bookSeatsArray = array_merge(array_unique($bookedDateArray));

        // Get all seat numbers
        $allSeats = DB::table('workspace_seat')
        ->select('seat_number')
        ->where('workspace_id', '=', $request->get('workspace_id'))
        ->get();

        // Insert all seat numbers for array
        foreach($allSeats as $as){
            $allSeatArray[] = $as->seat_number;
        }

        // Get Free seat for related workspace
        $freeSeatArray = array_merge(array_diff($allSeatArray, $bookSeatsArray));

        if(count($freeSeatArray) > 0){
            // Check workspace include seats
            $exitSeats = DB::table('workspace_details')
            ->select('seat')
            ->where('workspace_id', '=', $request->get('workspace_id'))
            ->first();

            if($exitSeats->seat == "Full"){
                // Generate unique reference number
                $barcode = rand(10000000, 99999999);

                $workspace_id = $request->get('workspace_id');
                $package_id = $request->get('package_id');
                $arrival_date = $request->get('arrival_date');
                $depature_date = $request->get('depature_date');
                $in_time = $request->get('in_time');
                $out_time = $request->get('out_time');
                $client_id = $request->get('client_id');

                // Get date difference between arrival and depature date
                $arrival = date_create($arrival_date);
                $depature = date_create($depature_date);
                $get_date_difference = date_diff($arrival, $depature);
                $date_diff = $get_date_difference->format('%R%a');

                // Get time difference between in time and out time
                $start_time = new DateTime($in_time);
                $end_time = new DateTime($out_time);
                $interval = $start_time->diff($end_time);
                $timeDiff = $interval->format('%h');

                // Get selected package price
                $package = DB::table('packages')
                ->select('price')
                ->where('package_id', '=', $package_id)
                ->first();

                // Calculate total amount of workspace
                $total = ($package->price * $timeDiff) * $date_diff;

                if(session()->has('loggedin')){
                    $client = DB::table('client_login')
                    ->select('*')
                    ->where('client_id', '=', session('loggedin'))
                    ->first();

                    $user_data = $client;
                }

                $compact = [
                    'workspace_id' => $workspace_id,
                    'package_id' => $package_id,
                    'client_id' => $user_data->client_id,
                    'arrival_date' => $arrival_date,
                    'depature_date' => $depature_date,
                    'in_time' => $in_time,
                    'out_time' => $out_time,
                    'number_of_seat' => '0',
                    'seat_numbers' => '',
                    'amount' => $total,
                    'reference_no' => $barcode
                ];

                return view('summery', $compact);
            }else{
                $data = [
                    'workspace_id' => $request->get('workspace_id'),
                    'package_id' => $request->get('package_id'),
                    'arrival' => $request->get('arrival_date'),
                    'depature' => $request->get('depature_date'),
                    'in_time' => $request->get('in_time'),
                    'out_time' => $request->get('out_time')
                ];

                return redirect()->route('booking.select-seat', $data);
            }

        }else{
            return redirect()->route('message')->with('message', 'No Worksapce availbale');
        }

    }

    /**
     * Select seat for seat include workspace
     */
    public function selectSeat(Request $request, int $workspace_id, int $package_id, string $arrival, string $depature, string $in_time, string $out_time)
    {
        $bookedDateArray = [];

        // Get the date difference between arrival and depature date
        $arrival_date = date_create($arrival);
        $depature_date = date_create($depature);
        $get_date_difference = date_diff($arrival_date, $depature_date);
        $date_diff = $get_date_difference->format('%R%a');

        // Create date range using date difference
        for ($i=0; $i <= $date_diff; $i++) {
            $start_date = $arrival;
            $date = new DateTime($start_date);
            $date->modify("+$i day");
            $date_range = $date->format('Y-m-d');

            // Check selected workspace booked each date range
            $bookedDates = DB::table('sheduale')
            ->select('*')
            ->where('workspace_id', '=', $workspace_id)
            ->whereDate('sheduale_date', '=', $date_range)
            ->get();

            // Add all booked date to array
            foreach($bookedDates as $bd){
                $bookedDateArray[] = $bd->seat_no;
            }
        }

        // Remove same element of the array
        $bookSeatsArray = array_merge(array_unique($bookedDateArray));

        // Get all seat numbers
        $allSeats = DB::table('workspace_seat')
        ->select('seat_number')
        ->where('workspace_id', '=', $workspace_id)
        ->get();

        // Insert all seat numbers for array
        foreach($allSeats as $as){
            $allSeatArray[] = $as->seat_number;
        }

        // Get Free seat for related workspace
        $freeSeatArray = array_merge(array_diff($allSeatArray, $bookSeatsArray));

        $seat = $freeSeatArray;

        if(session()->has('loggedin')){
            $client = DB::table('client_login')
            ->select('*')
            ->where('client_id', '=', session('loggedin'))
            ->first();

            $user_data = $client;
        }

        $compact = [
            'workspace_id' => $workspace_id,
            'package_id' => $package_id,
            'arrival' => $arrival,
            'depature' => $depature,
            'in_time' => $in_time,
            'out_time' => $out_time,
            'user_data' => $user_data,
            'seat' => $seat
        ];

        return view('select-seats', $compact);
    }

    /**
     * Place Booking
     */
    public function viewBookingSummary(Request $request)
    {
        // Generate unique reference number
        $barcode = rand(10000000, 99999999);

        $workspace_id = $request->get('workspace_id');
        $package_id = $request->get('package_id');
        $arrival_date = $request->get('arrival_date');
        $depature_date = $request->get('depature_date');
        $in_time = $request->get('in_time');
        $out_time = $request->get('out_time');
        $seat_numbers = $request->get('seat_numbers');
        $client_id = $request->get('client_id');

        $numberOfSeat = 0;
        $bookedSeatNumbers = '';

        if(!empty($seat_numbers)){
            // Get how many seat are booking
            $numberOfSeat = count($seat_numbers);

            // Add all booked seat numbers to coma seperate list
            $bookedSeatNumbers = implode(",", $seat_numbers);
        }

        // Get date difference between arrival and depature date
        $arrival = date_create($arrival_date);
        $depature = date_create($depature_date);
        $get_date_difference = date_diff($arrival, $depature);
        $date_diff = $get_date_difference->format('%R%a');

        // Get time difference between in time and out time
        $start_time = new DateTime($in_time);
        $end_time = new DateTime($out_time);
        $interval = $start_time->diff($end_time);
        $timeDiff = $interval->format('%h');

        // Get selected package price
        $package = DB::table('packages')
        ->select('price')
        ->where('package_id', '=', $package_id)
        ->first();

        // Calculate total amount of workspace
        $total = ($package->price * $timeDiff) * $date_diff;

        $compact = [
            'workspace_id' => $workspace_id,
            'package_id' => $package_id,
            'client_id' => $client_id,
            'arrival_date' => $arrival_date,
            'depature_date' => $depature_date,
            'in_time' => $in_time,
            'out_time' => $out_time,
            'number_of_seat' => $numberOfSeat,
            'seat_numbers' => $bookedSeatNumbers,
            'amount' => $total,
            'reference_no' => $barcode
        ];

        return view('summery', $compact);
    }

    /**
     * Save Booking from database
     */
    public function store(Request $request)
    {

        // Get max booking id
        $maxBookingId = DB::table('booking')
        ->select(DB::raw('count(*) as count'))
        ->first();

        $booking_id = $maxBookingId->count + 1;

        // Get all form data and assign values to variables
        $reference_no = $request->get('reference_no');
        $workspace_id = $request->get('workspace_id');
        $package_id = $request->get('package_id');
        $client_id = $request->get('client_id');
        $arrival_date = $request->get('arrival_date');
        $depature_date = $request->get('depature_date');
        $in_time = $request->get('in_time');
        $out_time = $request->get('out_time');
        $number_of_seat = $request->get('number_of_seat');
        $seat_numbers = $request->get('seat_numbers');
        $amount = $request->get('amount');

        $booking = new Booking();
        $booking->reference_no = $reference_no;
        $booking->workspace_id = $workspace_id;
        $booking->package_id = $package_id;
        $booking->client_id = $client_id;
        $booking->arrival_date = $arrival_date;
        $booking->depature_date = $depature_date;
        $booking->in_time = $in_time;
        $booking->out_time = $out_time;
        $booking->number_of_seat = $number_of_seat;
        $booking->seat_numbers = $seat_numbers;
        $booking->amount = $amount;
        $booking->save();

        $checkSeatType = DB::table('workspace_details')
        ->select('*')
        ->where('workspace_id', '=', $workspace_id)
        ->first();

        if($checkSeatType->seat == "Full"){
            // Get the date difference between arrival and depature date
            $arrival_date_1 = date_create($arrival_date);
            $depature_date_2 = date_create($depature_date);
            $get_date_difference = date_diff($arrival_date_1, $depature_date_2);
            $date_diff = $get_date_difference->format('%R%a');

            for ($i=0; $i <= $date_diff; $i++) {
                $start_date = $arrival_date;
                $date = new DateTime($start_date);
                $date->modify("+$i day");
                $date_range = $date->format('Y-m-d');

                DB::table('sheduale')
                ->updateOrInsert(
                    [
                        'booking_id' => $booking_id,
                        'sheduale_date' => $date_range
                    ],
                    [
                        'booking_id' => $booking_id,
                        'workspace_id' => $workspace_id,
                        'seat_no' => 'Full01',
                        'sheduale_date' => $date_range,
                        'in_time' => $in_time,
                        'out_time' => $out_time
                    ]
                );
            }
        }else{
            // Get the date difference between arrival and depature date
            $arrival_date_1 = date_create($arrival_date);
            $depature_date_2 = date_create($depature_date);
            $get_date_difference = date_diff($arrival_date_1, $depature_date_2);
            $date_diff = $get_date_difference->format('%R%a');

            // Remove coma and add all seat numbers to the array
            $seatArray = explode(',', $seat_numbers);

            if(count($seatArray) > 0){
                for ($j=0; $j < count($seatArray); $j++) {
                    for ($i=0; $i <= $date_diff; $i++) {
                        $start_date = $arrival_date;
                        $date = new DateTime($start_date);
                        $date->modify("+$i day");
                        $date_range = $date->format('Y-m-d');

                        DB::table('sheduale')
                        ->updateOrInsert(
                            [
                                'booking_id' => $booking_id,
                                'seat_no' => $seatArray[$j],
                                'sheduale_date' => $date_range
                            ],
                            [
                                'booking_id' => $booking_id,
                                'workspace_id' => $workspace_id,
                                'seat_no' => $seatArray[$j],
                                'sheduale_date' => $date_range,
                                'in_time' => $in_time,
                                'out_time' => $out_time
                            ]
                        );
                    }
                }
            }else{
                return redirect()->back();
            }
        }

        // Redirect to Message page
       return redirect()->route('message')->with('success', 'Your booking places successfully');
    }
}

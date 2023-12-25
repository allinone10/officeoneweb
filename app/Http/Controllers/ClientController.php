<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $validate = $request->validate([
            'first_name' => ['required', 'regex:/^[A-Za-z]*$/'],
            'last_name' => ['required', 'regex:/^[A-Za-z]*/'],
            'nic' => ['required'],
            'phone_no' => ['required'],
            'email' => ['required', 'unique:client,email'],
            'birthday' => ['required'],
            'job' => ['required'],
            'password' => ['required', Password::min(8)->letters()->numbers()->symbols()],
            'retype_password' => ['required', 'same:password', Password::min(8)->letters()->numbers()->symbols()]

        ]);

        // Get max client id from client table
        $getMaxClientId = DB::table('client')
        ->select(DB::raw('max(client_id) as maxId'))
        ->first();

        $maxClientId = $getMaxClientId->maxId + 1;

        $client = new Client();

        $client->first_name = $request->get('first_name');
        $client->last_name = $request->get('last_name');
        $client->nic = $request->get('nic');
        $client->phone_no = $request->get('phone_no');
        $client->land_line = $request->get('land_line');
        $client->email = $request->get('email');
        $client->birthday = $request->get('birthday');
        $client->job = $request->get('job');
        $encryptPassword = Hash::make($request->get('password'));
        $retypePassword = $request->get('retype_password');
        $client->save();

        /**
         * Save login credentail in seperate table
         * First, check client already have account
         *
         */
        $accountCount = DB::table('client_login')
        ->select(DB::raw('count(*) as userCount'))
        ->where('client_id', '=', $maxClientId)
        ->first();

        if($accountCount->userCount == 0){
            DB::table('client_login')
            ->insert([
                'client_id' => $maxClientId,
                'email' => $request->get('email'),
                'password' => $encryptPassword
            ]);
        }

        return redirect()->back()->with('success', 'Account created succfully.Please login now');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Client Profile
     */
    public function profile()
    {
        if(session()->has('loggedin')){
            $client = DB::table('client_login')
            ->select('*')
            ->where('client_id', '=', session('loggedin'))
            ->first();

            $user_data = $client;
        }

        // Fetch customer basic information
        $client = DB::table('client')
        ->select('*')
        ->where('client_id', '=', $user_data->client_id)
        ->first();

        // Fetch all booking details for related customer
        $booking = DB::table('booking')
        ->select('*')
        ->join('workspace_details', 'workspace_details.workspace_id', '=', 'booking.workspace_id')
        ->join('packages', 'packages.package_id', '=', 'booking.package_id')
        ->where('client_id', '=', $user_data->client_id)
        ->get();

        // Fetch all payment details
        $payment = DB::table('payment')
        ->select('*')
        ->get();

        // Fetch food ordred to related client
        $order = DB::table('food_order')
        ->select('*')
        ->where('client_id', '=' , $user_data->client_id)
        ->get();

        $orderList = DB::table('order_food_list')
        ->select('*')
        ->join('food_package', 'food_package.fp_id', '=', 'order_food_list.fp_id')
        ->get();

        return view('profile', compact('client', 'booking', 'payment', 'order', 'orderList'));
    }

    /**
     * Fetch shop related foods
     */
    public function fetchShopRelatedFoods(int $shop_id)
    {

    }
}

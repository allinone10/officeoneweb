<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OauthController extends Controller
{
    /**
     * Sign-in
     */
    public function signIn(Request $request)
    {
        //Check user fill all feild
        if(!empty($request->get('email')) && !empty($request->get('password'))) {

            // Check user account exit or notDB
            $user = DB::table('client_login')->select('email')->where('email', '=', $request->get('email'))->first();

            if($user){

                //Check user password valid or not
                $save_password = DB::table('client_login')->select('password')->where('email', '=', $request->get('email'))->first();

                if(Hash::check($request->get('password'), $save_password->password)){

                    $client_id = DB::table('client_login')->select('client_id')->where('email', '=', $request->get('email'))->first();
                    session()->put('loggedin',$client_id->client_id);

                    //Redirect to dashboard
                    return redirect('/')->with('success', 'Logging successfully');

                }else{

                    return redirect()->back()->with('error', 'Password invalid');

                }
            }else{

                return redirect()->back()->with('error', 'User account not found');

            }

        }else{

            return redirect()->back()->with('error', 'All feild are required.');

        }
    }

    /**
     * Sign out
     */
    public function signOut()
    {
        if(session()->has('loggedin')){
            session()->pull('loggedin');

            return redirect('/')->with('success', 'Successfully loggedout');
        }
    }

    /**
     * Redirect index page
     */
    public function home()
    {

    }
}

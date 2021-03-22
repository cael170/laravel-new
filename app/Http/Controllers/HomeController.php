<?php

namespace App\Http\Controllers;

use App\Models\UsersPhoneNumber;
use App\Models\UsersPhoneEmail;
use Twilio\Rest\Client;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = UsersPhoneNumber::all();
        $users2 = UsersPhoneEmail::all();
        return view('SMS', compact("users"),compact("users2"));
        
    }
    public function show()
    {
        $users = UsersPhoneNumber::all();
        $users2 = UsersPhoneEmail::all();

        


        return view('SMS', compact("users"),compact("users2"));

      
    }
}

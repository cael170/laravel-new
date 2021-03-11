<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersPhoneNumber;

class ControllerChart extends Controller
{
    public function index(){

$smsCount= UsersPhoneNumber::count();


        return view('chart',compact('smsCount'));

    }
}

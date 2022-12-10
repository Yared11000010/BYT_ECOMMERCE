<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function login(){

        return view('auth.login');
    }
    public function index(){

        return view('layouts.maindashboard');
    }
}

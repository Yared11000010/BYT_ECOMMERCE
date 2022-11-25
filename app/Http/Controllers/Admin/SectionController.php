<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //

    public function index(){

        return view('section.allsection');
    }
    public function addsection(){

        return view('section.addsection');
    }

    public function edit(){

        return view('section.editsection');
    }
}

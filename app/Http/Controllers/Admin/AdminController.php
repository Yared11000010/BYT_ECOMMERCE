<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //

    public function getLogin(){
      return view('admin.auth.login');
  }

  public function postLogin(Request $request)
  {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required',
      ]);

      if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
          $user = auth()->guard('admin')->user();
          if($user->is_admin == 1){
              return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
          }
      }else {
          return back()->with('error','Whoops! invalid email and password.');
      }
  }

  
}
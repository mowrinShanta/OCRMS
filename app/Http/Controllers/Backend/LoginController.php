<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function logIn()
    {
        //$lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('admin.layouts.login');
    }
    //profile
    public function profileList()
    {
        //$lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('admin.layouts.profile');
    }


    public function dologIn(Request $request )
    

    {
        //dd($request->all());
       $userInfo=$request->except('_token');
    //    $credentials['email']=$request->user_email;
    //    $credentials['password']=$request->user_password;
    //    dd($credentials);
    //    $credentials=$request->only('user_email','user_password');


       if(Auth::attempt($userInfo)){
           return redirect()->route('admin')->with('message','Login successful.');
       }
       return redirect()->route('admin.login')->with('sms','Invalid user credentials');

   }


    public function logOut()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }
   
}


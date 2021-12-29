<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\nidlist;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function niddList()
    {
        //$lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('user.websites.apply');
    }

    public function verified(Request $request)
    {
        
        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->route('user')->with('message','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');
    }

    public function niddCreate()
    {
        return view('user.websites.nids-create');
    }

    public function store(Request $request)
    {
        nidlist::create([
            //field name from DB ||  field name from form
        'nidnumber'=>$request->nidnumber,
       'name'=>$request->name,
        'fname'=>$request->fname,
        'mname'=>$request->mname,
        'cell'=>$request->cell,
        'email'=>$request->email,
        'birthdate'=>$request->birthdate,
        'address'=>$request->address
           
     ]);
     return redirect()->route('user.nidds');
    }

 


}

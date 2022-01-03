<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\complaintdetail;
use App\Models\nidlist;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

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
        $userFind=nidlist::where('nidnumber',$userInfo)->get();
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(empty($userFind->all())){
            return redirect()->back()->with('sms','Invalid user credentials');
           
        }
        else{
            return redirect()->route('user.nidds.create')->with('message','Login successful.');
        }
        
    } 

    public function niddCreate()
    {
        return view('user.websites.nids-create');
    }

    public function store(Request $request)
    {
        complaintdetail::create([
            //field name from DB ||  field name from form
        'date'=>$request->date,
       'time'=>$request->time,
        'name'=>$request->name,
        'address'=>$request->address,
        'cell'=>$request->cell,
        'email'=>$request->email,
        'complainttype'=>$request->complainttype,
        'description'=>$request->description,
        'image'=>$request->image
           
     ]);
     return redirect()->route('user.confirmation');
    }

     public function confirmationCreate()
     {
         return view('user.websites.confirmation-create');
     }



}

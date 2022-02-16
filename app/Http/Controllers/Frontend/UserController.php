<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\complaintdetail;
use App\Models\nidlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{

    
    public function registrationForm()
    {
        //$lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('user.websites.registration');
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
        // dd($request->all());
        $image_name=null;
        //              step 1: check image exist in this request.
                         if($request->hasFile('image'))
                         {
                             // step 2: generate file name
                             $image_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();
        //  dd($image_name);
                             //step 3 : store into project directory
        
                             $request->file('image')->storeAs('/uploads',$image_name);
        
                         }

                        


        complaintdetail::create([
            //field name from DB ||  field name from form
        'date'=>$request->date,
       'time'=>$request->time,
        'name'=>$request->name,
        'address'=>$request->address,
        'complainttype'=>$request->complainttype,
        'description'=>$request->description,
        'image'=>$image_name,
        'oname'=>$request->oname,
        'orname'=>$request->orname,
        'email'=>$request->email,
        'cell'=>$request->cell,
           
     ]);
     return redirect()->route('user.confirmation');
    }

     public function confirmationCreate()
     {
         return view('user.websites.confirmation-create');
     }

     public function complainerTable()
     {
        $informations = complaintdetail::orderBy('id','desc')->paginate(1);
         return view('user.websites.pdf',compact('informations'));
     }
    



//status portion
public function case_status($id){
//dd($id);
        $info = complaintdetail::find($id);
        if($info->case_status)
        {
            $info->update([
                'case_status'=>'solved'
            ]);
        }
        
    
        return redirect()->back();
    }

//end status portion

    public function InfoDelete($id)
    {
        complaintdetail::find($id)->delete();
       return redirect()->back()->with('success','Policestation is Deleted.');
    }


    //registration form
    public function storage(Request $request){
        //  dd($request->all());
       

          User::create([
            //field name from DB ||  field name from form
        'name'=>$request->name,
        'password'=>bcrypt($request->password),
        'email'=>$request->email,
        'cell'=>$request->cell,
           
      ]);
      return redirect()->route('user');
    }


    

}


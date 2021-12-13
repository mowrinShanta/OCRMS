<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintlist;
use Illuminate\Http\Request;

class NidController extends Controller
{

    public function nidList()
    {
        $types=complaintlist::all(); //table r sob dekhanor jonno
        return view('admin.layouts.complaint-list' ,compact('types'));
    }
    public function complaintCreate()
    {
        return view('admin.layouts.complaint-create');

    }

   // public function store(Request $request){
        //dd($request->all());
     
//dd($request->all());
        //complaintlist::create([
            //field name from DB ||  field name from form
        //'complaintnumber'=>$request->complaintnumber,
       // 'complainttype'=>$request->complainttype,
        //'complaintdetails'=>$request->complaintdetails,
       // 'image'=>$filename
           
     // ]);
       // return redirect()->route('admin.complaints');
   // }

   



}
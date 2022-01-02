<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintlist;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{

    public function complaintList()
    {
        $types=complaintlist::all(); //table r sob dekhanor jonno
        return view('admin.layouts.complaint-list' ,compact('types'));
    }
    public function complaintCreate()
    {
        return view('admin.layouts.complaint-create');

    }

    public function store(Request $request){
        //dd($request->all());
       if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
//dd($request->all());
        complaintlist::create([
            //field name from DB ||  field name from form
        'complaintnumber'=>$request->complaintnumber,
        'complainttype'=>$request->complainttype,
        'complaintdetails'=>$request->complaintdetails,
        'image'=>$filename
           
      ]);
        return redirect()->route('admin.complaints');
    }

    public function complaintDetails($complaint_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $complainttype=complaintlist::find($complaint_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.complaint-details',compact('complainttype'));
    }

   



}
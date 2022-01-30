<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintlist;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{

    public function complaintList(Request $request)
    {
        $types=complaintlist::all(); //table r sob dekhanor jonno

        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $types = complaintlist::where('name', 'Like', '%' . $search . '%')
                ->orWhere('number', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.complaint-list', compact('types'));
        }
        else{

            return view('admin.layouts.complaint-list' ,compact('types'));

        }
       
    }
    public function complaintCreate()
    {
        return view('admin.layouts.complaint-create');

    }
       
    
    

    public function store(Request $request){
        //dd($request->all());
       if($request->hasFile('image'))  //image
               {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);

        }
//dd($request->all());

$request->validate
([
    'complaintnumber'=>'required|numeric|digits:3',
    'complainttype'=>'required',
    'complaintdetails'=>'required',
    'image'=>'required',
]);


        complaintlist::create([
            //field name from DB ||  field name from form
        'complaintnumber'=>$request->complaintnumber,
        'complainttype'=>$request->complainttype,
        'complaintdetails'=>$request->complaintdetails,
        'image'=>$filename
           
      ]);
        return redirect()->route('admin.complaints');
    }

    public function complaintDetails($complainttype_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $complainttype=complaintlist::find($complainttype_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.complaint-details',compact('complainttype'));
    }

    public function complaintEdit($id){
        // dd($id);
        $complainttype = complaintlist::all();
        $complainttype = complaintlist::find($id);
        if ($complainttype) {
            return view('admin.layouts.update-complaint',compact('complainttype'));
        }

    }


    public function complaintUpdate(Request $request,$id){
        //dd($request->all());
        //dd($id);
       $complainttype = complaintlist::find($id);
       // dd($counciloroffice);
       if ($complainttype) {
           $complainttype->update([
               'complaintnumber'=>$request->complaintnumber,
            'complainttype'=>$request->complainttype,
            'complaintdetails'=>$request->complaintdetails,
            'image'=>$request->image,
            ]);
            return redirect()->route('admin.complaints');
        }
    }
    public function complaintDelete($complainttype_id)
    {
        complaintlist::find($complainttype_id)->delete();
       return redirect()->back()->with('success','Office detail Deleted.');
    }



}
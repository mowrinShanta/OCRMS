<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\feedbacklist;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function feedbackList()
    {
        $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('admin.layouts.feedback-list' ,compact('types'));
    }
    public function feedbackCreate()
    {
       return view('admin.layouts.feedback-create');

    }

   public function store(Request $request){
        //dd($request->all());

        $request->validate([


            'feedbacknumber'=>'required|numeric|digits:3',
            'officename'=>'required',
            'officername'=>'required',
            'complainername'=>'required',
            'complaineremail'=>'required|email',
            'complaintdetails'=>'required',
            'improvement'=>'required',
        ]);
     
        feedbacklist::create([
            //field name from DB ||  field name from form
        'feedbacknumber'=>$request->feedbacknumber,
       'officename'=>$request->officename,
        'officername'=>$request->officername,
        'complainername'=>$request->complainername,
        'complaineremail'=>$request->complaineremail,
        'complaintdetails'=>$request->complaintdetails,
        'improvement'=>$request->improvement
           
     ]);
     return redirect()->route('admin.feedbacks');
    }

    public function feedbackEdit($id){
        // dd($id);
        $feedbacktype = feedbacklist::all();
        $feedbacktype = feedbacklist::find($id);
        if ($feedbacktype) {
            return view('admin.layouts.update-feedback',compact('feedbacktype'));
        }

    }

   public function feedbackUpdate(Request $request,$id){
        //dd($request->all());
        //dd($id);
       $feedbacktype = feedbacklist::find($id);
       // dd($counciloroffice);
       if ($feedbacktype) {
           $feedbacktype->update([
            'feedbacknumber'=>$request->feedbacknumber,
            'officename'=>$request->officename,
             'officername'=>$request->officername,
             'complainername'=>$request->complainername,
             'complaineremail'=>$request->complaineremail,
             'complaintdetails'=>$request->complaintdetails,
             'improvement'=>$request->improvement
            ]);
            return redirect()->route('admin.feedbacks');
        }
    }

    public function feedbackDetails($feedbacktype_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $feedbacktype=feedbacklist::find($feedbacktype_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.feedback-details',compact('feedbacktype'));
    }

    public function feedbackDelete($feedbacktype_id)
    {
        feedbacklist::find($feedbacktype_id)->delete();
       return redirect()->back()->with('success','Office detail Deleted.');
    }


}
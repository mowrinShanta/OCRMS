<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function noticesList()
    {
        $notices=notice::all();
        return view('admin.layouts.notice-list' ,compact('notices'));
    }
    public function noticesCreate()
    {
       return view('admin.layouts.notice-create');

    }
    public function store(Request $request){
        //dd($request->all());
     
        notice::create([
            //field name from DB ||  field name from form
        'date'=>$request->date,
       'description'=>$request->description,
        'work'=>$request->work,
       
           
     ]);
     return redirect()->route('admin.notices');
    }
    public function noticesDetails($notice_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $notice=notice::find($notice_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.notice-details',compact('notice'));
    }

    public function noticesEdit($id){
        // dd($id);
        $notice = notice::all();
        $notice = notice::find($id);
        if ($notice) {
            return view('admin.layouts.update-notice',compact('notice'));
        }

    }

   public function noticesUpdate(Request $request,$id){
        //dd($request->all());
        //dd($id);
       $notice = notice::find($id);
       // dd($counciloroffice);
       if ($notice) {
           $notice->update([
        'date'=>$request->date,
       'description'=>$request->description,
        'work'=>$request->work,
       
            ]);
            return redirect()->route('admin.notices');
        }
    }
    public function noticesDelete($notice_id)
    {
        notice::find($notice_id)->delete();
       return redirect()->back()->with('success','Office detail Deleted.');
    }


}
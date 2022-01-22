<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintdetail;
use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList(Request $request)
    {
        $lists=complaintdetail::all(); //table r sob dekhanor jonno

        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $lists = complaintdetail::where('name', 'Like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.complaint-list', compact('lists'));
        }
        else{
        return view('admin.layouts.complainer-list' ,compact('lists'));
        }
    }
    
    public function complainertDetails($list_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $list=complaintdetail::find($list_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.complainer-details',compact('list'));
    }
    public function complainerEdit($id){
        // dd($id);
        $list = complaintdetail::all();
        $list = complaintdetail::find($id);
        if ($list) {
            return view('admin.layouts.update-complainer',compact('list'));
        }

    }
    public function complainerUpdate(Request $request,$id){
        //dd($request->all());
        //dd($id);
       $list = complaintdetail::find($id);
       // dd($counciloroffice);
       if ($list) {
           $list->update([
               'date'=>$request->date,
            'time'=>$request->time,
            'name'=>$request->name,
            'address'=>$request->address,
            'complainttype'=>$request->complainttype,
            'description'=>$request->description,
            'image'=>$request->image,
            'oname'=>$request->oname,
            'orname'=>$request->orname,
            'email'=>$request->email,
            'cell'=>$request->cell,
            ]);
            return redirect()->route('admin.complainers');
        }
    }

    public function complainerDelete($list_id)
    {
        complaintdetail::find($list_id)->delete();
       return redirect()->back()->with('success','Office detail Deleted.');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\counciloroffice;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function officeList(Request $request)
    {
        $lists=counciloroffice::all(); //table r sob dekhanor jonno

        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $lists = counciloroffice::where('name', 'Like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.office-list', compact('lists'));
        }
        else{
        return view('admin.layouts.office-list' ,compact('lists'));

        }
       
    }

    public function officeCreate()
    {
        return view('admin.layouts.counciloroffice-create');

    }

    public function store(Request $request){
        // dd($request->all());
        $validated = $request->validate
        ([
            'name'=>'required',
            'address'=>'required',
            'telephone'=>'required',
            'cell'=>'required',
            'email'=>'required',
        ]);

          counciloroffice::create([
            //field name from DB ||  field name from form
        'name'=>$request->name,
        'address'=>$request->address,
        'telephone'=>$request->telephone,
        'cell'=>$request->cell,
        'email'=>$request->email,
           
      ]);
      return redirect()->route('admin.offices');
    }

    public function officeDetails($office_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $office=counciloroffice::find($office_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.office-details',compact('office'));
    }

    public function officeDelete($office_id)
    {
        counciloroffice::find($office_id)->delete();
       return redirect()->back()->with('success','Office detail Deleted.');
    }


    public function officeEdit($id){
        // dd($id);
        $counciloroffices = counciloroffice::all();
        $counciloroffice = counciloroffice::find($id);
        if ($counciloroffice) {
            return view('admin.layouts.update-counciloroffice',compact('counciloroffice'));
        }

    }

    public function officeUpdate(Request $request,$id){
        // dd($request->all());
        // dd($id);
        $counciloroffice = counciloroffice::find($id);
        // dd($counciloroffice);
        if ($counciloroffice) {
            $counciloroffice->update([
                'name'=>$request->name,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
            'cell'=>$request->cell,
            'email'=>$request->email,
            ]);
            return redirect()->route('admin.offices');
        }
    }


}

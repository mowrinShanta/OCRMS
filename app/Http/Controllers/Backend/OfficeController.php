<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\counciloroffice;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function officeList()
    {
        $lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('admin.layouts.office-list' ,compact('lists'));
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
        return redirect()->back();
    }



}

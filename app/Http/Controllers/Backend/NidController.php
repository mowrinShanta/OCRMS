<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\nidlist;
use Illuminate\Http\Request;

class NidController extends Controller
{

    public function nidList()
    {
        $types=nidlist::all(); //table r sob dekhanor jonno
        return view('admin.layouts.nid-list' ,compact('types'));
    }
    public function nidCreate()
    {
       return view('admin.layouts.nid-create');

    }

   public function store(Request $request){
        //dd($request->all());
     
        nidlist::create([
            //field name from DB ||  field name from form
        'nidnumber'=>$request->nidnumber,
       'name'=>$request->name,
        'fname'=>$request->fname,
        'mname'=>$request->mname,
        'cell'=>$request->cell,
        'email'=>$request->email,
        'birthdate'=>$request->birthdate,
        'address'=>$request->address
           
     ]);
     return redirect()->route('admin.nids');
    }

   



}
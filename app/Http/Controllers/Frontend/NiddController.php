<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\nidlist;
use Illuminate\Http\Request;

class NiddController extends Controller
{

    public function niddList()
    {
        //$types=nidlist::all(); //table r sob dekhanor jonno
        return view('admin.layouts.nid-list');
    }
    public function nidCreate()
    {
       return view('admin.layouts.nid-create');

    }
}
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintdetail;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function contentList()
    {
         //table r sob dekhanor jonno
         $infos=complaintdetail::all();
        return view('admin.layouts.dashboard-content',compact('infos'));
    }
}
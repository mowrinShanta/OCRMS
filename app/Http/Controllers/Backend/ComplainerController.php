<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complaintdetail;
use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList()
    {
        $lists=complaintdetail::all(); //table r sob dekhanor jonno
        return view('admin.layouts.complainer-list' ,compact('lists'));
    }
    


}

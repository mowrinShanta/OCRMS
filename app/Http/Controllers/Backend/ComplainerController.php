<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\complainer;
use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList()
    {
        $lists=complainer::all(); //table r sob dekhanor jonno
        return view('admin.layouts.complainer-list' ,compact('lists'));
    }
    


}

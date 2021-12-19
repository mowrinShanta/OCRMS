<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function applyList()
    {
        //$lists=counciloroffice::all(); //table r sob dekhanor jonno
        return view('user.websites.apply');
    }



}

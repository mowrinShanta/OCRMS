<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\feedbacklist;
use Illuminate\Http\Request;

class FeedbacktableController extends Controller
{

    public function feedbackTable()
    {
        $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.feedback-table', compact('types'));
    }

    public function healthCare()
    {
        // $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.health-care');
    }


}

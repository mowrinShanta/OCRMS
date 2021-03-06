<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\feedbacklist;
use App\Models\notice;
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

    public function Law()
    {
        // $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.law');
    }
    public function Travel()
    {
        // $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.travel');
    }

    public function Recruitment()
    {
        // $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.recruitment');
    }
    
    public function Education()
    {
        // $types=feedbacklist::all(); //table r sob dekhanor jonno
        return view('user.websites.education');
    }


    //notice
    public function Notice()
    {
        $notices=notice::all(); //table r sob dekhanor jonno
        return view('user.websites.notice', compact('notices'));
    }


}

@extends('admin.master')


@section('content')
    <h1>Feedback</h1>

<p>Feedback Number: {{$feedbacktype->feedbacknumber}}</p>  
<p>Office Name: {{$feedbacktype->officename}}</p>
<p>Officer Name: {{$feedbacktype->officername}}</p>
<p>Complainer Name: {{$feedbacktype->complainername}}</p>
<p>Complainer Email: {{$feedbacktype->complaineremail}}</p>
<p>Complaint details: {{$feedbacktype->complaintdetails}}</p>
<p>Complaint Improvement: {{$feedbacktype->improvement}}</p>



@endsection


    
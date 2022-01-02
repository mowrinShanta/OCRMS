@extends('admin.master')


@section('content')
    <h1>Complaint Details</h1>

    
<p>Complaint Number: {{$complainttype->complaintnumber}}</p>
<p>Complaint Type: {{$complainttype->complainttype}}</p>
<p>Complaint Details: {{$complainttype->complaintdetails}}</p>
<p>Problem place Photo: {{$complainttype->image}}</p>



@endsection


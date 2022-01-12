@extends('admin.master')


@section('content')
    <h1>Complainer Details</h1>

    
<p>Issue Date: {{$list->date}}</p>
<p>Issue Time: {{$list->time}}</p>
<p>Complainer Name: {{$list->name}}</p>
<p>Complainer Address: {{$list->address}}</p>
<p>Complainer Phone: {{$list->cell}}</p>
<p>Complainer Email: {{$list->email}}</p>
<p>Complaint Type: {{$list->complainttype}}</p>
<p>Complaint Details: {{$list->description}}</p>
<p>Problem Place Photo: {{$list->image}}</p>



@endsection


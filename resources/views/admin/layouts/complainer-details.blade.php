@extends('admin.master')


@section('content')
    <h1>Complainer Details</h1>

    
<p>Issue Date: {{$list->date}}</p>
<p>Issue Time: {{$list->time}}</p>
<p>Complainer Name: {{$list->name}}</p>
<p>Complainer Address: {{$list->address}}</p>
<p>Complaint Type: {{$list->complainttype}}</p>
<p>Complaint Details: {{$list->description}}</p>
<p>
    Problem Place Photo
    <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/'.$list->image)}}" alt="image">
</p>
<p>Office Name: {{$list->oname}}</p>
<p>Officer Name: {{$list->orname}}</p>
<p>Officer Email: {{$list->email}}</p>
<p>Officer Phone: {{$list->cell}}</p>



@endsection

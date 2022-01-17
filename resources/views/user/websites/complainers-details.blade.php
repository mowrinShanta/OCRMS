@extends('user.main')


@section('content')
    <h1>Complainer Details</h1>

    
<p>Issue Date: {{$information->date}}</p>
<p>Issue Time: {{$information->time}}</p>
<p>Complainer Name: {{$information->name}}</p>
<p>Complainer Address: {{$information->address}}</p>
<p>Complainer Phone: {{$information->cell}}</p>
<p>Complainer Email: {{$information->email}}</p>
<p>Complaint Type: {{$information->complainttype}}</p>
<p>Complaint Details: {{$information->description}}</p>
<p>Problem Place Photo: {{$information->image}}</p>



@endsection


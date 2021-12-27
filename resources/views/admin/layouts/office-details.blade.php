@extends('admin.master')


@section('content')
    <h1>Office Details</h1>

    
<p>Name: {{$office->name}}</p>
<p>Address: {{$office->address}}</p>
<p>Telephone: {{$office->telephone}}</p>
<p>Cell: {{$office->cell}}</p>
<p>Email: {{$office->email}}</p>



@endsection

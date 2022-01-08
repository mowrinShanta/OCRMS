@extends('admin.master')


@section('content')
    <h1>Office Details</h1>

<p>Nid Number: {{$nidtype->nidnumber}}</p>  
<p>Name: {{$nidtype->name}}</p>
<p>Father's name: {{$nidtype->fname}}</p>
<p>Mother's name: {{$nidtype->mname}}</p>
<p>Cell: {{$nidtype->cell}}</p>
<p>Email: {{$nidtype->email}}</p>
<p>Date of Birth: {{$nidtype->birthdate}}</p>
<p>Address: {{$nidtype->address}}</p>



@endsection


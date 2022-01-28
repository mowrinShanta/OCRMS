@extends('admin.master')


@section('content')
    <h1>Notice Details</h1>

    
<p>Date: {{$notice->date}}</p>
<p>Description: {{$notice->description}}</p>
<p>Future work: {{$notice->work}}</p>



@endsection

@extends('admin.master')


@section('content')

<h1>Nid list</h1>
<a href="{{route('admin.nids.create')}}" class="btn btn-success">Create a new Nid</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nid Number</th>
        <th scope="col">Name</th>
        <th scope="col">Father's name</th>
        <th scope="col">Mother's name</th>
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    

    
    </tbody>
</table>
@endsection
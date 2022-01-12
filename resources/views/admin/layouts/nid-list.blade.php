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
        <!-- <th scope="col">Father's name</th>
        <th scope="col">Mother's name</th> -->
        <th scope="col">Cell</th>
        <!-- <th scope="col">Email</th> -->
        <th scope="col">Date of Birth</th>
        <!-- <th scope="col">Address</th> -->
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($types as $key=>$nidtype)
<tr>
    <th>{{$key+1}}</th>
    <td>{{$nidtype->nidnumber}} </td>
    <td>{{$nidtype->name}} </td>
    <!-- <td>{{$nidtype->fname}} </td>
    <td>{{$nidtype->mname}} </td> -->
    <td>{{$nidtype->cell}} </td>
    <!-- <td>{{$nidtype->email}} </td> -->
    <td>{{$nidtype->birthdate}} </td>
    <!-- <td>{{$nidtype->address}} </td> -->
    </td>
    <td>
    <a class="btn btn-primary" href="{{route('admin.nids.details',$nidtype->id)}}">View</a>
    <a class="btn btn-success" href="{{route('admin.nids.edit',$nidtype->id)}}">Edit</a> 
    <a class="btn btn-danger"  href="{{route('admin.nids.delete',$nidtype->id)}}">Delete</a>
</td>
    
    </tr>

@endforeach
  
    
    </tbody>
</table>
@endsection
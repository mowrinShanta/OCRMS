@extends('admin.master')


@section('content')

<h1>Complainer list</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Issue Date</th>
        <!-- <th scope="col">Issue Time</th> -->
        <th scope="col">Complainer Name</th>
        <!-- <th scope="col">Complainer Address</th> -->
        <th scope="col">Complainer Phone</th>
        <!-- <th scope="col">Complainer Email</th> -->
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Problem Place Photo</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $key=>$list)
<tr>
    <th>{{$key+1}}</th>
    <td>{{$list->date}} </td>
    <!-- <td>{{$list->time}} </td> -->
    <td>{{$list->name}} </td>
    <!-- <td>{{$list->address}} </td> -->
    <td>{{$list->cell}} </td>
    <!-- <td>{{$list->email}} </td> -->
    <td>{{$list->complainttype}} </td>
    <td>{{$list->description}} </td>
    
    <td>
        <img src="{{url('/uploads/'.$list->image)}}" width="100px" alt="image">
    </td>
    

    <td>
    <a href="{{route('admin.complainer.details',$list->id)}}" class="btn btn-primary">View</a>
    <a href="{{route('admin.complainer.edit',$list->id)}}" class="btn btn-success">Edit</a> 
    <a href="{{route('admin.complainer.delete',$list->id)}}" class="btn btn-danger">Delete</a>
    </td>
    
    </tr>

@endforeach
    
    </tbody>
</table>
@endsection
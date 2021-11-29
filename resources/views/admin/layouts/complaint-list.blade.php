@extends('admin.master')


@section('content')

<h1>Complaint type list</h1>
<a href="{{route('admin.complaint_type.create')}}" class="btn btn-success">Create a new complaint type</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Complaint Number</th>
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Problem place Photo</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($types as $key=>$complainttype)
<tr>
    <th>{{$key+1}}</th>
    <td>{{$complainttype->complaintnumber}} </td>
    <td>{{$complainttype->complainttype}} </td>
    <td>{{$complainttype->complaintdetails}} </td>
    <td>
        <img src="{{url('/uploads/'.$complainttype->image)}}" width="100px" alt="image">
    </td>
    <td><a href="#" class="btn btn-success">Edit</a> <a href="#" class="btn btn-success">Delete</a></td>
    
    </tr>

@endforeach
  
    
    </tbody>
</table>
@endsection
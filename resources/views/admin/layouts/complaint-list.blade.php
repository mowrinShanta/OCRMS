@extends('admin.master')


@section('content')

<h1>Complaint type list</h1>
<a href="{{route('admin.complaint_type.create')}}" class="btn btn-success">Create a new complaint type</a>


<!-- search -->
<form action="{{route('admin.complaints')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

<!-- end search -->


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
    <td>
    <a href="{{route('admin.complaint.details',$complainttype->id)}}" class="btn btn-primary">View</a>
    <a href="{{route('admin.complaint.edit',$complainttype->id)}}" class="btn btn-success">Edit</a> 
    <a onclick="return confirm('Are you sure?')" href="{{route('admin.complaint.delete',$complainttype->id)}}" class="btn btn-danger">Delete</a>
    </td>
    
    </tr>

@endforeach
  
    
    </tbody>
</table>
@endsection
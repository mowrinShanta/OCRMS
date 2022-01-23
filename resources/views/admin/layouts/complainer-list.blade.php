@extends('admin.master')


@section('content')

<h1>Complainer list</h1>

<!-- search -->
<form action="{{route('admin.complainers')}}">
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
        <th scope="col">Issue Date</th>
        <!-- <th scope="col">Issue Time</th> -->
        <th scope="col">Complainer Name</th>
        <!-- <th scope="col">Complainer Address</th> -->
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Problem Place Photo</th>
        <th scope="col">Office Name</th>
        <th scope="col">Officer Name</th>
        <!-- <th scope="col">Officer Email</th>
        <th scope="col">Officer Phone</th> -->
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
    <td>{{$list->complainttype}} </td>
    <td>{{$list->description}} </td>
    
    <td>
        <img src="{{url('/uploads/'.$list->image)}}" width="100px" alt="image">
    </td>
    <td>{{$list->oname}} </td>
    <td>{{$list->orname}} </td>
    <!-- <td>{{$list->email}} </td>
    <td>{{$list->cell}} </td> -->

    <td>
    <a href="{{route('admin.complainer.details',$list->id)}}" class="btn btn-primary">View</a>
    <a href="{{route('admin.complainer.delete',$list->id)}}" class="btn btn-danger">Delete</a>
    </td>
    
    </tr>

@endforeach
    
    </tbody>
</table>
@endsection
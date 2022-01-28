@extends('admin.master')


@section('content')

<h1>Councilor office list</h1>
<a href="{{route('admin.offices.create')}}" class="btn btn-success">Create new office</a>

<!-- search -->
<form action="{{route('admin.offices')}}">
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
        <th scope="col">No.</th>
        <th scope="col">Office Name</th>
        <th scope="col"> Officer Name</th>
        <!-- <th scope="col">Address</th> -->
        <th scope="col">Telephone</th>
        <th scope="col"> Cell</th>
        <!-- <th scope="col">Email</th> -->
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=>$counciloroffice)
    <tr>
    <th>{{$key+1}}</th>
    <td>{{$counciloroffice->name}} </td>
    <td>{{$counciloroffice->oname}} </td>
    <!-- <td>{{$counciloroffice->address}} </td> -->
    <td>{{$counciloroffice->telephone}} </td>
    <td>{{$counciloroffice->cell}} </td>
    <!-- <td>{{$counciloroffice->email}} </td> -->
    <td>
                        <a class="btn btn-primary" href="{{route('admin.office.details',$counciloroffice->id)}}">View</a>
                        <a class="btn btn-success" href="{{route('admin.offices.edit',$counciloroffice->id)}}">Edit</a>
                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{route('admin.office.delete',$counciloroffice->id)}}">Delete</a>
                    </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection

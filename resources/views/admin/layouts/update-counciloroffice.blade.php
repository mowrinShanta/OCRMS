@extends('admin.master')


@section('content')

<h1>Create new product</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<h1>Create a new councilor office</h1>

    <form action="{{route('admin.office.update',$counciloroffice->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Councilor Office Name</label>
            <input  value="{{$counciloroffice->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Address</label>
            <input value="{{$counciloroffice->address}}" name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter T&T Number</label>
            <input value="{{$counciloroffice->telephone}}" name="telephone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input value="{{$counciloroffice->cell}}" name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$counciloroffice->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>

     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

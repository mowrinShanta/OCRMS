@extends('admin.master')


@section('content')
<h1>Create new product</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

    <h1>Nid list</h1>

    <form action="{{route('admin.nids.update',$nidtype->id)}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Nid Number</label>
            <input  value="{{$nidtype->nidnumber}}" name="nidnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input value="{{$nidtype->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Father's name</label>
            <input value="{{$nidtype->fname}}" name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Mother's name</label>
            <input value="{{$nidtype->mname}}" name="mname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter cell number</label>
            <input value="{{$nidtype->cell}}" name="cell" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$nidtype->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter date of birth </label>
            <input value="{{$nidtype->birthdate}}" name="birthdate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter address </label>
            <input value="{{$nidtype->address}}" name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">



     <br>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

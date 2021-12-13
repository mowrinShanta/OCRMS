@extends('admin.master')


@section('content')

    <h1>Nid list</h1>

    <form action="{{route('admin.nids.store')}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Nid Number</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Father's name</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Mother's name</label>
            <input name="complaintdetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter cell number</label>
            <input type="file"  name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter date of birth </label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter address </label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">



     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
+
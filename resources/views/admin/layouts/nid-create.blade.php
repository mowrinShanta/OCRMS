@extends('admin.master')


@section('content')

    <h1>Nid list</h1>

    <form action="{{route('admin.nids.store')}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Nid Number</label>
            <input name="nidnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Father's name</label>
            <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Mother's name</label>
            <input name="mname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter cell number</label>
            <input name="cell" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter date of birth </label>
            <input name="birthdate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter address </label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">



     <br>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

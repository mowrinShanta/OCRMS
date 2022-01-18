@extends('admin.master')


@section('content')

    <h1>Create a new councilor office</h1>

    <form action="{{route('admin.offices.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Councilor Office Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Councilor Officer Name</label>
            <input name="oname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter T&T Number</label>
            <input name="telephone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>

     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

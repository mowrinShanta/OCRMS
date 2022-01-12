@extends('admin.master')


@section('content')

    <h1>Complaint type list</h1>

    <form action="{{route('admin.complaint_type.store')}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Number</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Enter Complaint Type</label>
            
        <select name="complainttype" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"required>
        <option> </option>
        <option>Street Problem</option>
        <option>Gas Problem</option>
        <option>Electric Problem</option>
        <option>Others</option>
    </select>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Details</label>
            <input name="complaintdetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter image</label>
            <input type="file"  name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        
     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

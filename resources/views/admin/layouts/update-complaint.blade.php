@extends('admin.master')


@section('content')

    <h1>Complaint type list</h1>

    <form action="{{route('admin.complaint.update',$complainttype->id)}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Number</label>
            <input  value="{{$complainttype->complaintnumber}}"  name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Enter Complaint Type</label>
            
        <select value="{{$complainttype->complainttype}}"  name="complainttype" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"required>
        <option value="Parcel Number"> </option>
        <option value="Parcel Number">Street Problem</option>
        <option value="Receipt Number">Gas Problem</option>
        <option value="Municipality">Electric Problem</option>
        <option value="Municipality">Others</option>
    </select>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Details</label>
            <input value="{{$complainttype->complaintdetails}}"  name="complaintdetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter image</label>
            <input type="file"  value="{{$complainttype->image}}"  name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        
     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

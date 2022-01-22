@extends('admin.master')


@section('content')
<h1>Create new product</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

    <h1>Feedback</h1>

    <form action="{{route('admin.feedbacks.update',$feedbacktype->id)}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Feedback Number</label>
            <input name="feedbacknumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Office Name</label>
            <select name="officename" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>Uttara sector 10(kamarpara councilor office)</option>
        <option>Dhaka North City Corporation</option>
        <option>Dhaka South City Corporation</option>
        <option>Others</option>
    </select>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Name</label>
            <select name="orname" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>Sonia Rahman(Uttara sector 10)</option>
        <option>Rahela Khatun(Dhaka North City Corporation)</option>
        <option>Mahabubur Rahman(Dhaka South City Corporation)</option>
        <option>Others</option>
    </select>

        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Name</label>
            <input name="complainername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Email</label>
            <input name="email" type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint details</label>
            <input name="complaintdetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Improvement </label>
            <input name="improvement" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        


     <br>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


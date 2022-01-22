@extends('admin.master')


@section('content')

<h1>Feedback</h1>
<a href="{{route('admin.feedbacks.create')}}" class="btn btn-success">Create a new feedback</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Feedback Number</th>
        <th scope="col">Office Name</th>
        <th scope="col">Officer Name</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Complainer Email</th>
        <th scope="col">Complaint details</th>
        <th scope="col">Complaint Improvement</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($types as $key=>$feedbacktype)
<tr>
    <th>{{$key+1}}</th>
    <td>{{$feedbacktype->feedbacknumber}} </td>
    <td>{{$feedbacktype->officename}} </td>
    <td>{{$feedbacktype->officername}} </td>
    <td>{{$feedbacktype->complainername}} </td>
    <td>{{$feedbacktype->complaineremail}} </td>
    <td>{{$feedbacktype->complaintdetails}} </td>
    <td>{{$feedbacktype->improvement}} </td>
    <td>
    <a class="btn btn-primary" href="{{route('admin.feedbacks.details',$feedbacktype->id)}}">View</a>
    <a class="btn btn-success" href="{{route('admin.feedbacks.edit',$feedbacktype->id)}}">Edit</a> 
    <a class="btn btn-danger"  href="{{route('admin.feedbacks.delete',$feedbacktype->id)}}">Delete</a>
</td>
    
    </tr>

@endforeach
  
    
    </tbody>
</table>
@endsection
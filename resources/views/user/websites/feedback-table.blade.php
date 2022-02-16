<!DOCTYPE html>
<html lang="en">
<head>
  <title>Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br/>
<br/>
<div class="container">
  <h2>Feedback Table</h2> 
  <br/>
<br/>           
  <table class="table table-dark table-striped">
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
    </tr>

@endforeach
  
    </tbody>
  </table>
</div>
<button><a href="{{route('user')}}" class="btn btn-success">BACK</a></button> 
</body>
</html>



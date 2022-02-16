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
  <h2>Notice</h2> 
  <br/>
<br/>  
<button><a href="{{route('user')}}" class="btn btn-success">BACK</a></button>         
  <table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
        <th scope="col">Future work</th>
       
    </thead>
    <tbody>
    @foreach($notices as $key=>$notice)
    <tr>
    <th>{{$key+1}}</th>
    <td>{{$notice->date}} </td>
    <td>{{$notice->description}} </td>
    <td>{{$notice->work}} </td>
    </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

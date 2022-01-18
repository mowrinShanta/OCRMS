@extends('admin.master')


@section('content')

<h1>Complainer list</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Office Name</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Complainer Phone</th>
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Problem Place Photo</th>
        <th scope="col">status</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($infos as $key=>$info)
<tr>
    <th>{{$key+1}}</th>
   
    <td>{{$info->complainttype}} </td>
    
    

<td><a href="" class="btn btn-primary">View</a></td>
    
    </tr>

@endforeach
</tbody>
</table>
@endsection
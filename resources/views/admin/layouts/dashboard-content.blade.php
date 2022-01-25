@extends('admin.master')


@section('content')

<h1> Monitoring Unit</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Complaint Date</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Complainer Type</th>
        <th scope="col">Office Name</th>
        <th scope="col">Officer Name</th>
        <th scope="col">Office Cell Number</th>
        <th scope="col">Status</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($infos as $key=>$info)
<tr>
    <th>{{$key+1}}</th>
    <td>{{$info->date}} </td>
    <td>{{$info->name}} </td>
    <td>{{$info->complainttype}} </td>
    <td>{{$info->oname}} </td>
    <td>{{$info->orname}} </td>
    <td>{{$info->cell}} </td> 
    <td>{{$info->case_status}}</td>

    <td><a href="{{route('user.status.solved',$info->id)}}"class="btn btn-primary">Solved</a></td>
    
    
    </tr>

@endforeach
</tbody>
</table>
@endsection
@extends('admin.master')


@section('content')

<h1>Notice list</h1>
<a href="{{route('admin.notices.create')}}" class="btn btn-success">Create a new notice</a>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
        <th scope="col">Future work</th>
        <th scope="col"><br>Action</br></th>
    </tr>
    </thead>
    <tbody>
    @foreach($notices as $key=>$notice)
    <tr>
    <th>{{$key+1}}</th>
    <td>{{$notice->date}} </td>
    <td>{{$notice->description}} </td>
    <td>{{$notice->work}} </td>
    <td>
    <a class="btn btn-primary" href="{{route('admin.notices.details',$notice->id)}}">View</a>
    <a class="btn btn-success" href="{{route('admin.notices.edit',$notice->id)}}">Edit</a>
    <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{route('admin.notices.delete',$notice->id)}}">Delete</a>
    </td>
    </tr>

    @endforeach
    
    
    </tbody>
</table>
@endsection
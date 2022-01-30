@extends('admin.master')


@section('content')

<!-- validation sms -->
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
</div>
@endif
<!-- end validation sms -->


    <h1>Notice list</h1>

    <form action="{{route('admin.notices.store')}}" enctype= "multipart/form-data"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Date</label>
            <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>

        </div>
       
        <div class="form-group">
						<label for="disc">Description</label>
						<textarea name="description" class="form-control" rows="3"></textarea>
					</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter future work</label>
            <input type="text"  name="work"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
        </div>
        
     
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

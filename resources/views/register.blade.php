@extends('index')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif
<form action="{{route('do_register')}}" method="POST" class="bg-dark text-light mt-5 p-3">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="Enter your Name"><br>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email-Id"><br>
    <input type="date" name="dob" class="form-control" placeholder="Enter your Date of Birth"><br>
    <input type="text" name="place" class="form-control" placeholder="Enter your Place"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection
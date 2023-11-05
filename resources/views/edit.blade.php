@extends('index')
@section('content')
<form action="{{route('update',$row->id)}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$row->name}}" class="form-control"><br>
    <input type="email" name="email" value="{{$row->email}}" class="form-control"><br>
    <input type="date" name="dob" value="{{$row->dob}}" class="form-control"><br>
    <input type="text" name="place" value="{{$row->place}}" class="form-control"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection
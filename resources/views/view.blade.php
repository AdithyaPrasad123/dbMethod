@extends('index')
@section('content')

@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
<table class="table table-dark table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Place</th>
        <th colspan="2" class="text-center">Action</th>
    </tr>
    @foreach($data as $datas)
    <tr>
        <td>{{$datas->name}}</td>
        <td>{{$datas->email}}</td>
        <td>{{$datas->dob}}</td>
        <td>{{$datas->place}}</td>
        <td><a href="{{route('edit',$datas->id)}}">Edit</a></td>
        <td><a href="{{route('delete',$datas->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
@endsection
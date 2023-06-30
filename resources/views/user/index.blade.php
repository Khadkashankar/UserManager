@extends('layouts.master')
@section('content')
<div class="button"><a class="btn btn-success" href="/">Add</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $users)
        <tr>
            <th scope="row">{{$users->id}}</th>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td><img width="80px" height="50px" src="images/{{$users->image}}"></td>
            <td><a class="btn btn-primary" href="{{url('edit',$users->id)}}">Edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')"
                    href="{{url('delete',$users->id)}}">Delete</a></td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
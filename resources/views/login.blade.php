@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <a href="show" class="mt-4 btn btn-success" role="button">view users</a>
</div>

<script>
@if(Session::has('message'))
toastr.success("{{ Session::get('message') }}");
@endif
</script>


@endsection
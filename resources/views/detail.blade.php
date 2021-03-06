@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('update',[$data->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="Text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$data->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="Text" name="email" class="form-control" id="exampleFormControlInput1" value="{{$data->email}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('delete',[$data->id])}}" class="btn btn-danger">Delete</a>
    </div>
</form>
</div>
@endsection

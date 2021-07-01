@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('create')}}" type="button" class="btn btn-success">Tambah User</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datas as $data)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td><a href="{{route('details',[$data->id])}}" type="button" class="btn btn-primary">Details</a></td>
    </tr>
  </tbody>
@endforeach
</table>
</div>
@endsection

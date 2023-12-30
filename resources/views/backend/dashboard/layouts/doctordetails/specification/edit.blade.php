@extends('backend.dashboard.layouts.master')
@section('title','Spcification')
@section('content')

<form class="user"   action="{{route('specification.update',$specifications->id)}}" method='POST'  enctype='multipart/form-data'>
 @csrf

<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Specification</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Specification " name='specification' value="{{$specifications->specification ?? ''}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Status " name='status' value="{{$specifications->status ?? ''}}">
  </div>
 


  <div class="card-footer">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>


@endsection
@extends('backend.dashboard.layouts.master')
@section('title','Approve Appointments')
@section('content')

<form class="user"   action="{{route('appointment.update',$appointments->id)}}" method='POST'  enctype='multipart/form-data'>
 @csrf

<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <select name="status">
      <option value="Approved">Approved</select>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status " name='status' value="{{$appointments->status?? ''}}">
  </div>
  
 
  <div class="card-footer">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>


@endsection
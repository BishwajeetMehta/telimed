@extends('backend.dashboard.layouts.master')
@section('title','Add Doctor')
@section('content')

<form class="user"   action='{{ route("specification.submit")}}' method='POST'  enctype='multipart/form-data'>
 @csrf

<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Specification</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Specification " name='specification'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Name " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Doctor Contact No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Contact No " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Doctor Email " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Password " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Consultancy Fee</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Consultancy Fee " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="StatDescription " name='status'>
  </div>


  <div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


@endsection
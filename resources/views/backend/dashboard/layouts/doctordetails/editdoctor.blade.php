@extends('backend.dashboard.layouts.master')
@section('title','Edit Doctor')
@section('content')

<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Doctor Form</h6>
                        </div>
                        
                    
                           
 @csrf

 <div class="form-group">
 <label for="exampleInputEmail1">Doctor Specification</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Specification " name='specification'>
   
<div class="card-body">

  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Name " name='name'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Doctor Contact No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Contact No " name='phone'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Doctor Email " name='email'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder=" Password " name='image'>
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Consultancy Fee</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Consultancy Fee " name='fee'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description " name='description'>
  </div>




</form>


@endsection










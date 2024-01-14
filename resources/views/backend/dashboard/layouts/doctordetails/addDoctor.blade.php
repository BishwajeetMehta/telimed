@extends('backend.dashboard.layouts.master')
@section('title','Add Doctor')
@section('content')


@foreach ($errors->all() as $error)
        
        @endforeach
<form class="user"   action="{{route('doctor.add')}}" method='POST'  enctype='multipart/form-data'>
 @csrf


<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Specification</label>
   
      <div >
        <select  name="specification_id"> 
        @forelse($specifications as $spec)
          <option value="{{$spec->id}}">{{$spec->specification}}</option>
            @empty
          <option value="">No specification</option>
           @endforelse
         </select >
     </div>
</div>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Name " name='name'>
    @if($errors->first('name'))
        <span style='color:red;'>{{$errors->first('name')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Doctor Contact No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Contact No " name='phone'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Doctor Email " name='email'>
    @if($errors->first('email'))
        <span style='color:red;'>{{$errors->first('email')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Password " name='password'>
    @if($errors->first('password'))
        <span style='color:red;'>{{$errors->first('password')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Doctor Consultancy Fee</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Doctor Consultancy Fee " name='fee'>
    @if($errors->first('fee'))
        <span style='color:red;'>{{$errors->first('fee')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="StatDescription " name='status'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="StatDescription " name='image'>
    @if($errors->first('image'))
        <span style='color:red;'>{{$errors->first('image')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="StatDescription " name='description'>
  </div>


  <div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


@endsection
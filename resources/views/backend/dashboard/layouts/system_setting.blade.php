@extends('backend.dashboard.layouts.master')
@section('title','System Settings')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System Settings</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"> System Settings </h1>
            </div>
            @foreach ($errors->all() as $error)
        
        @endforeach

<form class="user"   action='{{ route("system-setting.store")}}' method='POST'  enctype='multipart/form-data'>
 @csrf

<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name " name='name'>
    @if($errors->first('name'))
        <span style='color:red;'>{{$errors->first('name')}}</span>
        @endif
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Salogon</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Salogon " name='slogan'>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone" name='phone'>
    @if($errors->first('phone'))
        <span style='color:red;'>{{$errors->first('phone')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name='email'>
    @if($errors->first('email'))
        <span style='color:red;'>{{$errors->first('email')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name='address'>
    @if($errors->first('address'))
        <span style='color:red;'>{{$errors->first('address')}}</span>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Logo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Logo" name='logo'>
  </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>


@endsection

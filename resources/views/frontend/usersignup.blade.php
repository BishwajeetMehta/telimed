<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Signup</title>
        <link href="{{asset('css/styles2.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    @foreach ($errors->all() as $error)
        
                                    @endforeach
                                        <form action="{{route('usersignup.submit')}}"  method='POST'  enctype='multipart/form-data'>
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="name" />
                                                        @if($errors->first('name'))
                                                        <span style='color:red;'>{{$errors->first('name')}}</span>
                                                        @endif
                                                        <label for="inputFirstName"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Address" name="address"/>
                                                        @if($errors->first('address'))
                                                       <span style='color:red;'>{{$errors->first('address')}}</span>
                                                       @endif
                                                        <label for="inputLastName">Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="email" placeholder="Enter your first name" name="email" />
                                                        @if($errors->first('email'))
                                                       <span style='color:red;'>{{$errors->first('email')}}</span>
                                                       @endif
                                                        <label for="inputFirstName"> Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Address" name="mobile" />
                                                        @if($errors->first('mobile'))
                                                       <span style='color:red;'>{{$errors->first('mobile')}}</span>
                                                                                                      @endif
                                                        <label for="inputLastName">Mobile</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="age"/>
                                                        <label for="inputLastName">Age</label>
                                                    </div>


                                                   
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" />
                                                        @if($errors->first('password'))
                                                       <span style='color:red;'>{{$errors->first('password')}}</span>
                                                       @endif
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="file" placeholder="name@example.com"  name="image"/>
                                                <label for="inputEmail">Image</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"> <button type="submit" class="btn btn-primary">signup</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"></div>
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>

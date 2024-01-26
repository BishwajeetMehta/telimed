<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>


<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Records</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Appoinment(Time,Status)</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($appointments as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->mobile}}</td>
                                            <td>{{$data->age}}</td>
                                            <td>{{$data->address}}</td>
                                            <td><img src="{{$data->image}}" height="100px" width="100px"></td>
                                            @forelse($data->appointments as $appData)
                                            <td>{{$appData->time}} &nbsp {{$appData->status}}</td>
                                            @empty
                                            <td>
                                                no records
                                            </td>

                                        </tr>
                                        @endforelse

                                            @empty
                                            <td>
                                                no records
                                            </td>

                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>


</body>
</html>
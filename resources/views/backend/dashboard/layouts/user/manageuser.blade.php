@extends('backend.dashboard.layouts.master')
@section('title','manage User')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">  users of the system</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Mobile</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->image}}</td>
                                            <td>{{$user->mobile}}</td>
                                            <td>{{$user->age}}</td>
                                            <td>{{$user->address}}</td>
                                            <td> &nbsp&nbsp&nbsp<a href="{{route('user.delete',$user->id)}}" class='btn btn-danger'>Delete</a> </td>
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

</form>
@endsection


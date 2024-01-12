@extends('backend.dashboard.layouts.master')
@section('title','Users of the system')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Users Table</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>name </th>
                                            <th>email</th>
                                            <th>mobile</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>image</th>
                                           
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($users as $users)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$users->mobile}}</td> 
                                            <td>{{$users->address}}</td>
                                            <td>{{$users->age}}</td>
                                            <td>{{$users->image}}</td>
                                            
                                            <td>&nbsp&nbsp&nbsp<a href="{{route('user.delete',$users->id)}}" class='btn btn-danger'>Delete</a> </td>
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


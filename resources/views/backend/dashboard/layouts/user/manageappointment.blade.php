@extends('backend.dashboard.layouts.master')
@section('title','Users of the system')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Appointments Table</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Specification_id </th>
                                            <th>Doctor_id</th>
                                            <th>User_id</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($appointments as $apoints)
                                        <tr>
                                            <form action="{{route('user.mail',$apoints->user_id)}}" method="post">
                                                @csrf
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$apoints->specification->specification}}</td>
                                            <td>{{$apoints->doctor->name}}</td>
                                            <td>{{$apoints->user->name}}</td> 
                                            <td>{{$apoints->date}}</td>
                                            <td>{{$apoints->time}}</td>
                                            <td>{{$apoints->message}}</td>
                                            <td>{{$apoints->status}}</td>
                                            
                                            <td><a href="{{route('appointment.edit',$apoints->id)}}" class='btn btn-primary'>Approve</a>&nbsp&nbsp&nbsp<a href="{{route('declineappointment',$apoints->id)}}" class='btn btn-danger'>Decline</a>
                                          
                                        </td>
                                          
                                        </form>
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


@extends('backend.dashboard.layouts.master')
@section('title','Spcification')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Doctor Table</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>specification_id</th>
                                            <th>name</th>
                                            <th>phone</th>
                                            <th>email</th>
                                            <th>image</th>
                                            <th>fee</th>
                                            <th>status</th>
                                            <th>description</th>
                                                                      
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($doctor as $doc)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$doc->specification_id}}</td>
                                            <td>{{$doc->name}}</td>
                                            <td>{{$doc->phone}}</td>
                                            <td>{{$doc->email}}</td>
                                            <td>{{$doc->image}}</td>
                                            <td>{{$doc->fee}}</td>
                                            <td>{{$doc->status}}</td>
                                            <td>{{$doc->description}}</td>
                                            <td> <a href="{{route('doctor.edit',$doc->id)}}"  class='btn btn-primary'>edit</a>&nbsp&nbsp&nbsp<a href="{{route('doctor.delete',$doc->id)}}" class='btn btn-danger'>Delete</a> </td>
                                    
                                           
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
                        <hr> 
                                <a href="{{route('doctor.add')}}" class='btn btn-primary'>Add new Doctor</a>
                            </hr>
                    </div>

</form>
@endsection


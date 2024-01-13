@extends('backend.dashboard.layouts.master')
@section('title','doctor table')
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
                                            <th>Specifications Id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Fee</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                           
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($doctors as $doc)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$doc->specification_id}}</td>
                                            <td>{{$doc->name}}</td>
                                            <td>{{$doc->phone}}</td>
                                            <td>{{$doc->email}}</td>
                                            <td>{{$doc->fee}}</td>
                                            <td>{{$doc->status}}</td>
                                            <td>{{$doc->description}}</td>
                                            <td><img src="{{$doc->image}}"height="100px" width="100px"></td>
                                            <td> <a href="#"  class='btn btn-primary'>edit</a>&nbsp&nbsp&nbsp<br><br><a href="{{route('doctor.delete',$doc->id)}}" class='btn btn-danger'>Delete</a> </td>
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
                                <a href="#" class='btn btn-primary'>Add new specification</a>
                            </hr>
                    </div>

</form>
@endsection


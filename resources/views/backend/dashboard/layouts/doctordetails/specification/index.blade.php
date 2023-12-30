@extends('backend.dashboard.layouts.master')
@section('title','Spcification')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Doctor Specifications Table</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Specifications</th>
                                            <th>status</th>
                                           
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($specifications as $spec)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$spec->specification}}</td>
                                            <td>{{$spec->status}}</td>
                                            <td> <a href="{{route('specification.edit',$spec->id)}}"  class='btn btn-primary'>edit</a>&nbsp&nbsp&nbsp<a href="{{route('specification.delete',$spec->id)}}" class='btn btn-danger'>Delete</a> </td>
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
                                <a href="{{route('specification.create')}}" class='btn btn-primary'>Add new specification</a>
                            </hr>
                    </div>

</form>
@endsection


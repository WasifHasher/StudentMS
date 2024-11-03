@extends('mainFolder.mainlayout')
@section('mainContant')


    <div class="container bg-light mt-5">
        @if (session('status'))
        <span class="alert alert-success"> {{ session('status')}}</span>  
        @endif
        <div class="row">
            <div class="">

                <h2 class="py-3 float-start">Student Table</h2>
                <a href="/addNew" class="mt-4 px-3 py-2 text-decoration-none fw-bold float-end" style="background: darkblue;color:white;">Add New</a>
            </div>
            <div class="col-12 mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="background: darkblue;color:white;">Id</th>
                            <th style="background: darkblue;color:white;">Name</th>
                            <th style="background: darkblue;color:white;">Address</th>
                            <th style="background: darkblue;color:white;">Mobile</th>
                            <th style="background: darkblue;color:white;">Gender</th>
                            <td style="background: darkblue;color:white;">Edit</td>
                            <td style="background: darkblue;color:white;">Delete</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->mobile}}</td>
                            <td>{{$item->gender}}</td>
                            <td>
                                <a href="{{ url('editRecord/'.$item->id.'/edit')}}"  class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('deleteRecord/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                        
                    
                </table>
            </div>
        </div>
    </div>




    
@endsection
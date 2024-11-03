@extends('mainFolder.mainlayout')
@section('mainContant')



<div class="container bg-light mt-5">
    @if (session('status'))
    <span class="alert alert-success"> {{ session('status')}}</span>  
    @endif
    <div class="row">
        <div>

            <h2 class="py-3 float-start">Batches Table</h2>
            <a href="/batches/create" class="px-3 py-2 text-decoration-none fw-bold  mt-4 float-end" style="background: darkblue;color:white;">Add New</a>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="background: darkblue;color:white;">Id</th>
                        <th style="background: darkblue;color:white;">Name</th>
                        <th style="background: darkblue;color:white;">Course_id</th>
                        <th style="background: darkblue;color:white;">Course_name</th>
                        <th style="background: darkblue;color:white;">Date</th>
                        <td style="background: darkblue;color:white;">Edit</td>
                        <td style="background: darkblue;color:white;">Delete</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($batches as $item)
                        
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->course->id}}</td>
                        <td>{{$item->course->name}}</td>
                        <td>{{$item->date}}</td>
                       
                        <td>
                            <a href="{{ url('batches/'.$item->id.'/edit')}}"  class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url('batches/'.$item->id)}}" method="POST">
                                
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                    
                
            </table>
        </div>
    </div>
</div>



@endsection
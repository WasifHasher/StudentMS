@extends('mainFolder.mainlayout')
@section('mainContant')


<div class="container bg-light mt-5">
    @if (session('status'))
    <span class="alert alert-success"> {{ session('status')}}</span>  
    @endif
    <div class="row">
        <div class="">
            <h2 class="py-3 float-start">Enrollment Table</h2>
        <a href="enrollments/create" class="px-3 py-2 text-decoration-none fw-bold float-end mt-4" style="background: darkblue;color:white;">Add New</a>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="background: darkblue;color:white;">Id</th>
                        <th style="background: darkblue;color:white;">Enroll_no</th>
                        <th style="background: darkblue;color:white;">Batch_id</th>
                        <th style="background: darkblue;color:white;">Student_id</th>
                        <th style="background: darkblue;color:white;">Jion_Date</th>
                        <th style="background: darkblue;color:white;">Fees</th>
                        <td style="background: darkblue;color:white;">Edit</td>
                        <td style="background: darkblue;color:white;">Delete</td>
                        <td style="background: darkblue;color:white;">Print</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrollments as $item)
                        
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->enroll_no}}</td>
                        <td>{{$item->batche->name}}</td>
                        <td>{{$item->student->name}}</td>
                        <td>{{$item->join_date}}</td>
                        <td>{{$item->fee}}</td>
                       
                        <td>
                            <a href="{{ url('enrollments/'.$item->id.'/edit')}}"  class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url('enrollments/'.$item->id)}}" method="POST">
                                
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            {{-- <a href="{{url('enrollments/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a> --}}
                        </td>
                        <td> <a href="{{ url('report/'.$item->id.'/report')}}" class="btn btn-success">print</a></td>

                    </tr>
                    @endforeach
                </tbody>
                    
                
            </table>
        </div>
    </div>
</div>
    
@endsection
@extends('mainFolder.mainlayout')
@section('mainContant')




<div class="container bg-light mt-5">
    @if (session('status'))
    <span class="alert alert-success"> {{ session('status')}}</span>  
    @endif
    <div class="row">
        <div class="">

            <h2 class="py-3 float-start">Payment Table</h2>
            <a href="payments/create" class="mt-4 px-3 py-2 text-decoration-none fw-bold float-end" style="background: darkblue;color:white;">Add New</a>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="background: darkblue;color:white;">Id</th>
                        <th style="background: darkblue;color:white;">enroll_id</th>
                        <th style="background: darkblue;color:white;">paid_date</th>
                        <th style="background: darkblue;color:white;">amount</th>
                        <td style="background: darkblue;color:white;">Edit</td>
                        <td style="background: darkblue;color:white;">Delete</td>
                       

                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment as $item)
                        
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->enroll_id}}</td>
                        <td>{{$item->paid_date}}</td>
                        <td>{{$item->amount}}</td>
                       
                        <td>
                            <a href="{{ url('payments/'.$item->id.'/edit')}}"  class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url('payments/'.$item->id)}}" method="POST">
                                
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
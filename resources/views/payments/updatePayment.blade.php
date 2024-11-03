@php

        use App\Models\enrollment;
        

        $payment = App\Models\enrollment::get();
      


@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: rgb(0,0,0,0.3)">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-7 bg-white rounded" style="height: 400px;">
             
                <h2 class="py-3">Update Enrollment</h2>

                <form action="{{url('payments/'.$show_update_page->id)}}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="form-group my-3">

                        <select name="enroll_id"  class="form-control w-100 py-2 rounded ps-3">
                            <option value="{{ $show_update_page->enroll_id}}">{{ $show_update_page->enroll_id}}</option> 
                            @foreach ($payment as $enrollments)
                            <option value="{{ $enrollments->id }}">{{ $enrollments->id}}</option> 
                            @endforeach
                           
                        </select>
                        @error('enroll_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <input type="date" class="form-control w-100 py-2 rounded ps-3" value="{{ $show_update_page->paid_date}}" name="paid_date">
                        @error('paid_date')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{ $show_update_page->amount}}" name="amount">
                        @error('amount')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>
              
            <a href="/payments" class="btn btn-danger mt-2"> back</a>
            <button class="btn btn-primary mt-3 mb-2">Update</button>

                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>


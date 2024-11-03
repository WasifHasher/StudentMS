@php

        use App\Models\enrollment;
        use App\Models\student;

        $enroll = App\Models\batche::get();
        $student = App\Models\student::get();


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
            <div class="col-7 bg-white rounded" style="height: 460px;">
             
                <h2 class="py-2">Update Enrollment</h2>

                <form action="{{url('enrollments/'.$show->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                                    
                <div class="form-group my-3">
                    <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$show->enroll_no}}" name="enroll_no">
                    @error('enroll_no')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group my-3">

                    <select name="batche_id"   class="form-control w-100 py-2 rounded ps-3">
                        <option  value="{{$show->batche->name}}">{{$show->batche->name}}</option> 

                        @foreach ($enroll as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                    
                    </select>
                    @error('batche_id')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group my-3">

                    <select name="student_id"  class="form-control w-100 py-2 rounded ps-3">

                        <option  value="{{$show->student->name}}">{{$show->student->name}}</option> 

                        @foreach ($student as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                    
                    </select>
                    @error('student_id')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group my-3">
                    
                    <input type="date" name="join_date"  value="{{$show->join_date}}" class="form-control w-100 py-2 rounded ps-3">
                    @error('join_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <input type="text"  value="{{$show->fee}}" class="form-control w-100 py-2 rounded ps-3"  name="fee">
                    @error('fee')
                    <div class="text-danger">{{$message}}</div>
                        
                    @enderror
                </div>



            <a href="/enrollments" class="btn btn-danger mt-2"> back</a>
            <button class="btn btn-primary mt-3 mb-2">Update</button>

                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>


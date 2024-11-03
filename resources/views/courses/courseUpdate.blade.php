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
            <div class="col-7 bg-white rounded" style="height: 360px;">
                <h2 class="py-3">Update Courses</h2>

                <form action="{{ url('course/'.$course->id.'/updated')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$course->name}}" name="name">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$course->syllabus}}" name="syllabus">
                        @error('syllabus')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>

                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$course->duration}}" name="duration">
                        @error('duration')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                
                  
                    <a href="/courses" class="btn btn-danger mt-2"> back</a>
                    <button class="btn btn-primary mt-3 mb-2">Submit</button>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>
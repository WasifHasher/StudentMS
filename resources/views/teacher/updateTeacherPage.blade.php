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
            <div class="col-7 bg-white rounded">
                <h2 class="py-3">Update Teacher Information</h2>

                <form action="{{ url('teacher/'.$showteacher->id.'/update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$showteacher->name}}" name="name">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$showteacher->address}}" name="address">
                        @error('address')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$showteacher->mobile}}" name="mobile">
                        @error('mobile')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="form-group my-3">
                        <select name="gender" class="form-control w-100 py-2 rounded ps-3">
                            <option value="male" {{ $showteacher->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $showteacher->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                        <div class="text-danger">{{$message}}</div>
                            
                        @enderror
                    </div>

                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$showteacher->Qualification}}" name="Qualification">
                        @error('Qualification')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group my-3">
                        <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$showteacher->Experience}}" name="Experience">
                        @error('Experience')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <a href="/teacher" class="btn btn-danger mt-2"> back</a>
                    <button class="btn btn-primary mt-3 mb-2">Submit</button>
                </form>


            </div>
        </div>
    </div>


    
</body>
</html>
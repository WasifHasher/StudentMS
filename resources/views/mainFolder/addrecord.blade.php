<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: rgb(217, 213, 213)">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-7 bg-light rounded" style="height:340px;">
                    <form action="/SaveRecord" method="POST">
                        @csrf
                        <div class="form-group my-3">
                            <input type="text" class="form-control w-100 py-2 rounded ps-3" placeholder="Name" name="name">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                                
                            @enderror
                        </div>
                    
                        <div class="form-group my-3">
                            <input type="text" class="form-control w-100 py-2 rounded ps-3" placeholder="Address" name="address">
                            @error('address')
                            <div class="text-danger">{{$message}}</div>
                                
                            @enderror
                        </div>
                    
                        <div class="form-group my-3">
                            <input type="text" class="form-control w-100 py-2 rounded ps-3" placeholder="Mobile" name="mobile">
                            @error('mobile')
                            <div class="text-danger">{{$message}}</div>
                                
                            @enderror
                        </div>
                    
                        <div class="form-group my-3">
                            <select name="gender" class="form-control w-100 py-2 rounded ps-3">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                            <div class="text-danger">{{$message}}</div>
                                
                            @enderror
                        </div>
                        <a href="/student" class="btn btn-danger mt-2"> back</a>
                        <button class="btn btn-primary mt-3 mb-2">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    
</body>
</html>
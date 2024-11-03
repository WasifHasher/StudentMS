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

    
<div class="container mt-5" >
    <div class="row justify-content-center">
        
        <div class="col-7 bg-white rounded" style="height: 400px;">
            <h2 class="py-3">Update Record</h2>
            <form action="{{url ('UpdateRecord/'.$updateData->id.'/edit')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$updateData->name}}" name="name">
                </div>
            
                <div class="form-group my-3">
                    <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$updateData->address}}" name="address">
                </div>
            
                <div class="form-group my-3">
                    <input type="text" class="form-control w-100 py-2 rounded ps-3" value="{{$updateData->mobile}}" name="mobile">
                </div>
            
                <div class="form-group my-3">
                    <select name="gender" class="form-control w-100 py-2 rounded ps-3">
                        <option value="male" {{ $updateData->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $updateData->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                
            
                <button class="btn btn-primary mt-3 mb-2">Submit</button>
                <a href="/student" class="btn btn-danger mt-2"> back</a>
            </form>
            

        </div>
    </div>
</div>
    
</body>
</html>



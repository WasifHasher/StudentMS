<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            color: white;
        }
        .active{
            background: white;
            color: darkblue;
           padding: 10px 90px 10px 10px;
           border-radius: 40px;
            
        }
        .th{
            background: darkblue;
            color: white;
        }
        
        /* ul li:nth-child(1){
            background: rgb(91, 118, 118);
        }
        ul li:nth-child(2){
            background: rgb(112, 186, 186);
        } */
        
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark text-white " style="height:100vh;">
                <ul class="mt-5">

                    <li class="list-unstyled py-2" ><a href="" class="text-decoration-none"><i class="fa-solid fa-house pe-2"></i><span class="fw-bolder">Home</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/student" class="text-decoration-none {{ Request::is('student') ? 'active' : '' }}"><i class="fa-solid fa-graduation-cap pe-2"></i><span class="fw-bolder">Student</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/teacher"  class="text-decoration-none {{ Request::is('teacher') ? 'active' : '' }}"><i class="fa-solid fa-chalkboard-user pe-2"></i><span class="fw-bolder">Teacher</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/courses"  class="text-decoration-none {{ Request::is('courses') ? 'active' : '' }}"><i class="fa-brands fa-discourse pe-2"></i><span class="fw-bolder">Courses</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/batches"  class="text-decoration-none {{ Request::is('batches') ? 'active' : '' }}"><i class="fa-brands fa-discourse pe-2"></i><span class="fw-bolder">Bataches</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/enrollments"  class="text-decoration-none {{ Request::is('enrollments') ? 'active' : '' }}"><i class="fa-solid fa-list-ol pe-2"></i><span class="fw-bolder">Enrollment</span></a></li>
                    <li class="list-unstyled py-2" ><a href="/payments"  class="text-decoration-none {{ Request::is('payments') ? 'active' : '' }}"><i class="fa-solid fa-money-bill pe-2"></i><span class="fw-bolder">Payment</span></a></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="row bg-light py-2"><h1>Student Management System</h1></div>
                @yield('mainContant')
            </div>
        </div>
    </div>


    <script>


       




    </script>

</body>
</html>
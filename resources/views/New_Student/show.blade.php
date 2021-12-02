<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1 style="color:red;text-align:center;margin-top:5%;"> Student <small class="text-muted">View</small></h1>

    <div class="card border border-dark" style="width: 30rem;margin:2% auto;">

            <div class="row">
                <div class="col">
                    <img src="{{ asset('image/'.$student->photo) }}" class="img-fluid rounded-circle" style="width: 50%;display: block;margin: 15px auto" alt="photo of student">
                </div>
            </div>
            <hr>

            <div class="card-body">
                <div class="row">
                     <h5 class="card-title my-3" style="margin: auto;">{{$student -> first_name}} {{$student -> last_name}}</h5>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Gender : </b><p class="card-text">{{$student ->gender}}</p>
                    </div>
                    <div class="col-4">
                        <b>Grade : </b><p class="card-text">{{$student ->grade->name}}</p>
                    </div>
                    <div class="col-4">
                        <b>Address : </b><p class="card-text">{{$student ->address}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <b>Date of Birth : </b><p class="card-text">{{$student ->date_of_birth}}</p>
                    </div>
                    <div class="col-4">
                        <b>Email : </b><p class="card-text">{{$student ->email}}</p>
                    </div>
                    <div class="col-4">
                        <b>Tel No : </b><p class="card-text">{{$student ->mobile_no}}</p>
                    </div>
                </div>

                    <div>
                        <?php $subjects=explode(',',$student ->subject);?>

                        <div class="d-flex m-1">
                            <b>Subjects : </b>
                            @foreach ($subjects as $subject)
                            <span class="badge bg-warning text-dark m-2">{{$subject}}</span>
                            @endforeach
                    </div>

                    <div class="d-flex" style="float: right;">
                        <a class="btn btn-md btn-success"
                        href="{{ route('students-new.index') }}">Back
                        </a>
                    </div>

                </div>
            </div>

        </div>
      </div>
</body>
</html>

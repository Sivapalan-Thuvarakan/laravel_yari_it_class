<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{asset('css/style.css')}"/>
</head>
<body>
    <h1 style="color:red;text-align:center;margin-top:5%;;"> Create <small class="text-muted">Student</small></h1>
<div class="card border border-dark" style="width: 40rem;margin:2% auto;padding:30px">
<form  action="{{route('students-new.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-6">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control"  placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control"  placeholder="Last Name">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <p>Gender :</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="male" name="gender" value="male" class="custom-control-input">
                <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" id="female" name="gender" value="female" class="form-check">
            <label class="custom-control-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <p>Select  Grade :</p>
            <select id="grade" name="grade" class="custom-select">
                @foreach ($grades as $grade)
                <option value={{$grade->id}}>{{$grade->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="address" >Address :</label><br>
            <textarea   class="form-control" name="address" id="address" placeholder="Enter Address"></textarea><br>
        </div>
        <div class="form-group col-md-6">
                <p>Subject :</p>
                <div class="form-check form-check-inline">
                <input  class="form-check-input" type="checkbox" name="subject[]" value="tamil" id="tamil">
                <label class="form-check-label" for="tamil">Tamil</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input"type="checkbox" name="subject[]" value="science" id="science">
                <label class="form-check-label" for="science">Science</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="maths" id="maths">
                <label class="form-check-label" for="maths">Maths</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="english" id="english">
                <label class="form-check-label" for="english">English</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="history" id="history">
                <label class="form-check-label" for="history">History</label><br><br>
                </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="dob">Date Of Birth :</label>
            <input class="form-control" type="date" id="dob" name="date_of_birth">
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email :</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group col-md-4">
            <label for="tel">Mobile No :</label>
            <input class="form-control" type="text" id="tel" name="tel" placeholder="Enter Tel No">
        </div>
    </div>





    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" ><br><br>
    <div class="d-flex" style="float: right;">
        <a class="btn btn-md btn-success" style="margin: 5px"
        href="{{ route('students-new.index') }}">Back
        </a>
        <button class="btn btn-md btn-primary" style="margin: 5px"  type="submit" >Save</button>
    </div>

</form></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



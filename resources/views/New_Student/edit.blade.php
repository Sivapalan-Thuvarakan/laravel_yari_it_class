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
    <h1 style="color:red;text-align:center;margin:50px;"> Edit <small class="text-muted">Student</small></h1>
<div class="card" style="width: 40rem;margin:50px auto;padding:30px">
<form  action="{{route('students-new.update',$student->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-row">
        <div class="col-md-6">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control"  placeholder="First Name" value="{{$student->first_name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control"  placeholder="Last Name" value="{{$student->last_name}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <p>Gender :</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="male" name="gender" value="male" <?php if($student->gender == "male") echo "checked" ?> class="custom-control-input">
                <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" id="female" name="gender" value="female" <?php if($student->gender == "female" ) echo "checked"?> class="form-check">
            <label class="custom-control-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <p>Select  Grade :</p>
            <select id="grade" name="grade" class="custom-select">
                <option value="Six" <?php if($student->grade == "Six") echo "selected" ?>>Grade 6</option>
                <option value="Seven" <?php if($student->grade == "Seven") echo "selected" ?>>Grade 7</option>
                <option value="Eight" <?php if($student->grade == "Eight") echo "selected" ?>>Grade 8</option>
                <option value="Nine" <?php if($student->grade == "Nine") echo "selected" ?>>Grade 9</option>
                <option value="Ten" <?php if($student->grade == "Ten") echo "selected" ?>>Grade 10</option>
                <option value="O level" <?php if($student->grade == "O level") echo "selected" ?>>O Level</option>
                <option value="A level"<?php if($student->grade == "A level") echo "selected" ?>>A Level</option>
            </select>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="address" >Address :</label><br>
            <textarea   class="form-control" name="address" id="address" placeholder="Enter Address" >{{$student->address}}</textarea><br>
        </div>
        <div class="form-group col-md-6">
                <p>Subject :</p>
                <?php $sub = explode(',',$student->subject) ?>
                <div class="form-check form-check-inline">
                <input  class="form-check-input" type="checkbox" name="subject[]" value="tamil"
                <?php if(in_Array('tamil',$sub)){ echo "checked";}?> id="tamil">
                <label class="form-check-label" for="tamil">Tamil</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input"type="checkbox" name="subject[]" value="science"
                <?php if(in_Array('science',$sub)){ echo "checked";}?> id="science">
                <label class="form-check-label" for="science">Science</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="maths"
                <?php if(in_Array('maths',$sub)){ echo "checked";}?> id="maths">
                <label class="form-check-label" for="maths">Maths</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="english"
                <?php if(in_Array('english',$sub)){ echo "checked";}?> id="english">
                <label class="form-check-label" for="english">English</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="subject[]" value="history"
                <?php if(in_Array('history',$sub)){ echo "checked";}?> id="history">
                <label class="form-check-label" for="history">History</label><br><br>
                </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="dob">Date Of Birth :</label>
            <input class="form-control" type="date" id="dob" name="date_of_birth" value="{{$student->date_of_birth}}">
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email :</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" value="{{$student->email}}">
        </div>
        <div class="form-group col-md-4">
            <label for="tel">Mobile No :</label>
            <input class="form-control" type="text" id="tel" name="tel" placeholder="Enter Tel No" value="{{$student->mobile_no}}">
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



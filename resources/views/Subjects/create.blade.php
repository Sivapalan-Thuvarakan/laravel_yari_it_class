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
    <h1 style="color:red;text-align:center;margin-top:5%;;"> Create <small class="text-muted">Subject</small></h1>
<div class="card border border-dark" style="width: 40rem;margin:2% auto;padding:30px">
<form  action="{{route('subjects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-6">
            <label for="fname">Subject Name</label>
            <input type="text" name="name" id="fname" class="form-control"  placeholder="Subject Name">
        </div>
        <div class="col-md-6">
            <label for="color">color</label>
            <input type="text" name="color" id="color" class="form-control"  placeholder="color">
        </div>
        <div class="col-md-6">
            <label for="sub_index">Subject Index</label>
            <input type="text" name="sub_index" id="sub_index" class="form-control"  placeholder="subject index">
        </div>
        <div class="col-md-6">
            <label for="order">Order</label>
            <input type="text" name="order" id="order" class="form-control"  placeholder="order">
        </div>
    </div>

    <div class="d-flex" style="float: right;">
        <a class="btn btn-md btn-success" style="margin: 5px"
        href="{{ route('subjects.index') }}">Back
        </a>
        <button class="btn btn-md btn-primary" style="margin: 5px"  type="submit" >Save</button>
    </div>

</form></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



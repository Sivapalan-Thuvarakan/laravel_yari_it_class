<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{asset('css/style.css')}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <h1 style="color:red;text-align:center;margin:50px;"> Add <small class="text-muted">Subjects</small></h1>
    <div class="card border border-dark" style="width: 30rem;margin:2% auto;">
        <form action="{{route('store_student_subject')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input  class="form-control" type="text" name="student_id" hidden value={{$student_id}} >
            @foreach ($subjects as $subject )
            <div class="form-check form-check">
                <input  class="form-check-input" type="checkbox" name="subject[]" value={{$subject->id}} id={{$subject->name}}
                @if (in_array($subject->id,$existingSubject))
                    checked
                @endif
                >
                <label class="form-check-label" for={{$subject->name}}>{{$subject->name}}</label>
            </div>
            @endforeach
            <div class="d-flex" style="float: right;">
                <a class="btn btn-md btn-success" style="margin: 5px"
                href="{{ route('students-new.index') }}">Back
                </a>
                <button class="btn btn-md btn-primary" style="margin: 5px"  type="submit" >Save</button>
            </div>
        </form>
    </div>
</body>
</html>

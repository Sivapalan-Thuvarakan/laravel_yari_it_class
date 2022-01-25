@extends('layout.master')
@section('content')
    <h1 style="color:red;text-align:center;margin-top:5%;;"> Create <small class="text-muted">Student</small></h1>
<div class="card border border-dark" style="width: 40rem;margin:2% auto;padding:30px">
<form  action="{{route('students-new.store')}}" method="POST" enctype="multipart/form-data" id="student_create">
    @csrf
    <div class="form-row">
        <div class="col-md-6">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control @error('fname') is-invalid @enderror"  placeholder="First Name">
            @error('fname')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control @error('lname') is-invalid @enderror"  placeholder="Last Name">
            @error('lname')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <p>Gender :</p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="male" name="gender" id="gender" value="male" class="custom-control-input" checked>
                <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" id="gender" name="gender" value="female" class="form-check @error('gender') is-invalid @enderror">
            <label class="custom-control-label" for="female">Female</label>
            </div>
            @error('gender')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <p>Select  Grade :</p>
            <select id="grade" name="grade" class="custom-select @error('grade') is-invalid @enderror">
                <option value=" ">selected</option>
                @foreach ($grades as $grade)
                <option value={{$grade->id}}>{{$grade->name}}</option>
                @endforeach
            </select>
            @error('grade')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="address" >Address :</label><br>
            <textarea   class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Enter Address"></textarea>
            @error('address')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <br>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="dob">Date Of Birth :</label>
            <input class="form-control @error('dob') is-invalid @enderror" type="date" id="dob" name="date_of_birth" value="{{ date('Y-m-d') }}">
            @error('dob')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email :</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Enter Email">
            @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="tel">Mobile No :</label>
            <input class="form-control @error('tel') is-invalid @enderror" type="text" id="tel" name="tel" placeholder="Enter Tel No">
            @error('tel')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>





    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" ><br><br>
    <div class="d-flex" style="float: right;">
        <a class="btn btn-md btn-success" style="margin: 5px"
        href="{{ route('students-new.index') }}">Back
        </a>
        <button class="btn btn-md btn-primary" style="margin: 5px"  type="submit"  >Save</button>
    </div>

</form></div>
@endsection
@push('script')
<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#student_create').submit(function(e){
            e.preventDefault();
            let fname=$("#fname").val();
            let lname=$("#lname").val();
            let gender=$("#gender").val();
            let grade=$("#grade").val();
            let address=$("#address").val();
            let date_of_birth=$("#dob").val();
            let email=$("#email").val();
            let tel=$("#tel").val();

            $.ajax({
                method:"POST",
                url:"{{route('students-new.store')}}",
                data:{fname:fname,lname:lname,gender:gender,grade:grade,address:address,date_of_birth:date_of_birth,email:email,tel:tel},
                success:function(data){
                    alert(data.success);
                },
                error:function(data){
                    alert(data.mydata);
                }
            });
        });
    });
</script>
@endpush



<h1> Edit Student</h1>

<form action="{{route('students.update',$student->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" value="{{$student->first_name}}">
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" value="{{$student->last_name}}">
    <br>
    <input type="submit" value="save">
</form>


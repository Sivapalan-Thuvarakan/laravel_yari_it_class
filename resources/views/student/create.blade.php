<h1> Create Student</h1>

<form action="{{route('student.show')}}" method="POST">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname">
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname">
    <br>
    <input type="submit" value="save">
</form>


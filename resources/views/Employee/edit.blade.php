<h1> Edit Employee</h1>
<form action="{{route('employees.update',$employee->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" value="{{$employee->first_name}}">
    <br><br>

    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" value="{{$employee->last_name}}">
    <br><br>

    <label for="dob">DOB</label>
    <input type="date" name="dob" id="dob" value="{{$employee->dob}}">
    <br><br>

    <label for="salary">Salary</label>
    <input type="number" name="salary" id="salary" value="{{$employee->salary}}">
    <br><br>

    <input type="submit" value="save">
</form>

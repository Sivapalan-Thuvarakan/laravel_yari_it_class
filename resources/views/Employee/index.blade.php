<h1>Our Employees</h1>
<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->dob}}</td>
            <td>{{$employee->salary}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

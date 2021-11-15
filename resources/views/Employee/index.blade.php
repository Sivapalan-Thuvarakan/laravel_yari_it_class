<h1>Our Employees</h1>
<a href="{{route('employees.create')}}">Add New</a>
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
            <td><a href="{{route('employees.show',$employee->id)}}">Show</a></td>
            <td><a href="{{route('employees.edit',$employee->id)}}">Edit</a></td>
            {{-- <td><a href="{{route('employees.destroy',$employee->id)}}">Delete</a></td> --}}
            <td>
                <form action="{{route('employees.destroy',$employee->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

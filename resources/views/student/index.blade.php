
<body>
<h1> Our Student List</h1>
<a href="{{route('students.create')}}">Add New</a><br><br>
{{--
@foreach ($students as $student )
    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    <br>
@endforeach--}}
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Grade</th>
            <th>Address</th>
            <th>Subject</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Mobile no</th>
            <th>Image</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->grade}}</td>
    <td>{{$student->address}}</td>
    <td>{{$student->subject}}</td>
    <td>{{$student->date_of_birth}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->mobile_no}}</td>
    <td>image</td>
    <td><a href="{{route('students.show',$student->id)}}">show</a></td>
    <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
    <td>
    <form action="{{route('students.destroy',$student->id)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>

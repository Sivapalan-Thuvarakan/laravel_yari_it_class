
<body>
<h1> Our Student List</h1>
<a href="{{route('students.create')}}">Add New</a>
@foreach ($students as $student )
    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    <br>
@endforeach
<table border="1">

    @foreach ($students as $student)
    <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td><a href="{{route('students.show',$student->id)}}">show</a></td>
    <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
    </tr>
    @endforeach

</table>
</body>

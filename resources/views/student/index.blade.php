
<body>
<h1> Our Student List</h1>
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
    </tr>
    @endforeach

</table>
</body>

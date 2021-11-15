
<body>
    <h1> Details of Student - {{$student -> first_name}}</h1>
    <img src='{{ asset('image/'.$student->photo) }}'><br>
    <b>ID :</b>{{$student -> id}}<br>
    <b>First Name :</b>{{$student -> first_name}}<br>
    <b>Last Name :</b>{{$student -> last_name}}<br>
    <b>Gender :</b>{{$student -> gender}}<br>
    <b>Grade :</b>{{$student -> grade}}<br>
    <b>Address :</b>{{$student -> address}}<br>
    <b>Subject :</b>{{$student -> subject}}<br>
    <b>Date of Birth :</b>{{$student -> date_of_birth}}<br>
    <b>Email :</b>{{$student -> email}}<br>
    <b>Mobile No :</b>{{$student -> mobile_no}}<br>
</body>
<br><br><br>
<a href="{{route('students.index')}}">Home</a>

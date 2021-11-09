{{--
<h1>Student Info</h1>
<form action="/test" method="POST">

    First Name <input type="text" id="fname" name="fname"/>
    <input type="submit"/>
    @csrf
</form>
--}}


<h1>Home work-05</h1>
<form action="/test" method="POST">
    @csrf
    Page <input type="text" id="page" name="page"/><br><br><br>
    Color <input type="text" id="color" name="color"/><br><br><br>
    <input type="submit"/>
</form>

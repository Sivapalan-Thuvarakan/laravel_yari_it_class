<h1>Home work-05</h1>
<form action="/put" method="post">
    @method('put')
    @csrf
    Page <input type="text" id="page" name="page"/><br><br><br>
    Color <input type="text" id="color" name="color"/><br><br><br>
    <input type="submit"/>
</form>
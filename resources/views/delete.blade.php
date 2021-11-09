<h1>Delete</h1>
<form action="/delete" method="post">
    @method('delete')
    @csrf
    Page <input type="text" id="page" name="page"/><br><br><br>
    Color <input type="text" id="color" name="color"/><br><br><br>
    <input type="submit"/>
</form>
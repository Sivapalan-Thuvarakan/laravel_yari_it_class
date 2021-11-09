<body style= {{ $color }}>
<h1>Welcome to Home Page</h1>

<em>Menu</em>
<hr>
<a href="{{route('myLink',['page'=>'gallery'])}}">Gallery</a>
<a href="{{route('myLink',['page'=>'video'])}}">Video</a>
<a href="{{route('myLink',['page'=>'myinfo'])}}">My Info</a>
<a href="{{route('myLink',['page'=>'contactus'])}}">Contact Us</a>
<a href="{{route('myLink',['page'=>'about'])}}">About</a>
</body>
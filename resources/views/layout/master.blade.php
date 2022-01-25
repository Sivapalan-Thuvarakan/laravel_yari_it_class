<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"/> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    @stack('script')
</body>
</html>

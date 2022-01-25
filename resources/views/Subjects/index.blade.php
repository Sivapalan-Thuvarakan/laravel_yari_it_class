<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{asset('css/style.css')}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    @if (Session::has('message'))
        <p style="color:{{Session::get('color')}};">{{Session::get('message')}}</p>
    @endif
    <div class="container">
        <h1 style="color:red;text-align:center;margin:50px;"> Student <small class="text-muted">Management System</small></h1>

        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <a class="btn btn-sm btn-primary" href="{{ route('subjects.create') }}"><i class="fa fa-plus"></i>
                    Add New</a><br><br>
            </div>
        </div>

        <h1 style="color:red;text-align:center;margin:20px;">Our Subjects</small></h1>
        <table class="table table-sm table-bordered" style="font-size: 14px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Subjects</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody style="font-size: 11px">
                @foreach ($subjects as $subject)
                    <tr scope="row">
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-sm btn-success" style="margin: 5px"
                                    href="{{ route('subjects.show', $subject->id) }}"><i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-warning" style="margin: 5px"
                                    href="{{ route('subjects.edit', $subject->id) }}"><i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    {{-- <input class="btn btn-sm btn-danger" style="margin: 5px" type="submit" value="Delete"> --}}
                                    <button class="btn btn-sm btn-danger" style="margin: 5px"><i
                                            class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>

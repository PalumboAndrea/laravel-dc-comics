<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-dc-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1 class="m-4">Comics:</h1>
    <div class="container">
        <div class="row my-2">
            <div class="col-12 d-flex">
                <a class="btn btn-primary ms-auto" href=" {{ route('admin.create') }} ">Create new product</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">thumb</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                    <th scope="col">sale_date</th>
                    <th scope="col">type</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr> 
                    <th scope="row">{{ $comic->id }} </th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td class="width">{{ $comic->thumb }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td class="d-flex justify-content-between">
                        <a class="btn btn-primary m-1" href="{{ route('admin.show', $comic->id) }}">Show</a>
                        <a class="btn btn-warning m-1">Edit</a>
                        <a class="btn btn-danger m-1">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

</body>

</html>

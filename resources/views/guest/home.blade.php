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
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-3 text-center">
                <h1>
                    {{ $comic->title }} 
                </h1>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>
                    {{ $comic->price }} &euro;
                </p>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>

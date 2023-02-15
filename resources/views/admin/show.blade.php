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

        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-6">
                    <h1 class="m-4">
                        Comic:
                    </h1>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary" href=" {{ route('admin.comics.index') }} ">
                        Torna alla home
                    </a>
                </div>
            </div>
        </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>
                            {{ $comic->title }} 
                        </h1>
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <p>
                            {{ $comic->price }} &euro;
                        </p>
                    </div>
                </div>
            </div>
        
    </body>

</html>

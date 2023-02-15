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
                        Modifica elemento:
                    </h1>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary" href=" {{ route('admin.comics.index') }} ">
                        Torna alla home
                    </a>
                </div>
            </div>
        </div>
        
        <div class="container">
            <form action=" {{ route('admin.comics.update', $comic->id) }} " method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" class="form-control" placeholder="add title" name="title" value=" {{ $comic->title }} ">
                </div>
                <div class="mb-3">
                    <label class="form-label">description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" name="description">
                        {{ $comic->description }}
                    </textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">thumb</label>
                    <input type="text" class="form-control" placeholder="add thumb" name="thumb" value=" {{ $comic->thumb }} ">
                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input type="text" class="form-control" placeholder="add price" name="price" value=" {{ $comic->price }} ">
                </div>
                <div class="mb-3">
                    <label class="form-label">series</label>
                    <input type="text" class="form-control" placeholder="add series" name="series" value=" {{ $comic->series }} ">
                </div>
                <div class="mb-3">
                    <label class="form-label">sale_date</label>
                    <input type="text" class="form-control" placeholder="add sale_date" name="sale_date" value=" {{ $comic->sale_date }} ">
                </div>
                <div class="mb-3">
                    <label class="form-label">type</label>
                    <input type="text" class="form-control" placeholder="add type" name="type" value=" {{ $comic->type }} ">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        
        
    </body>

</html>

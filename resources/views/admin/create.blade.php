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

        <h1 class="m-4">
            Crealo tu!
        </h1>
        <div class="container">
            <form action=" {{ route('admin.admin.store') }} " method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" class="form-control" placeholder="add title" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">thumb</label>
                    <input type="text" class="form-control" placeholder="add thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input type="text" class="form-control" placeholder="add price" name="price">
                </div>
                <div class="mb-3">
                    <label class="form-label">series</label>
                    <input type="text" class="form-control" placeholder="add series" name="series">
                </div>
                <div class="mb-3">
                    <label class="form-label">sale_date</label>
                    <input type="text" class="form-control" placeholder="add sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label class="form-label">type</label>
                    <input type="text" class="form-control" placeholder="add type" name="type">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        
        
    </body>

</html>

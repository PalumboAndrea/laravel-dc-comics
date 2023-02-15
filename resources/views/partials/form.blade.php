<div class="container">
    <form action=" {{ route($route, $comic->id) }} " method="POST">
        @csrf
        @method($method)
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

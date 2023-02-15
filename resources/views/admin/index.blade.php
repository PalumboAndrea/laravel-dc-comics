@extends('layouts.app')

@section('main-content')
    
    <div class="container">
        <div class="row my-2 d-flex align-items-center justify-content-between">
            <div class="col-10">
                <h1 class="my-4">
                    Comics:
                </h1>
            </div>
            <div class="col">
                <a class="btn btn-primary ms-auto" href=" {{ route('admin.comics.create') }} ">Create new product</a>
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
                    <td class="d-flex">
                        <a class="btn btn-primary m-1" href="{{ route('admin.comics.show', $comic->id) }}">Show</a>
                        <a class="btn btn-warning m-1" href="{{ route('admin.comics.edit', $comic->id) }}">Edit</a>
                        <form action=" {{ route('admin.comics.destroy', $comic->id) }} " method="POST" class="form-deleter" data-element-name="{{ $comic->title }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-1">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection

@section('script')

    @vite('resources/js/deleteForm.js')

@endsection



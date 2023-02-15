@extends('layouts.app')

@section('main-content')

    <div class="container my-4">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-6">
                <h1 class="m-0">
                    Modifica elemento:
                </h1>
            </div>
            @include('partials.backHome')
        </div>
    </div>
    
    @include('partials.form', ['route' => 'admin.comics.update', 'method' => 'PUT', 'product' => $comic])
        
        
@endsection

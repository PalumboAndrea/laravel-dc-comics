@extends('layouts.app')

@section('main-content')

    <div class="container my-4">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-10">
                <h1 class="m-0">
                    Crea un nuovo elemento!
                </h1>
            </div>
            @include('partials.backHome')
        </div>
    </div>
   
    @include('partials.form', ['route' => 'admin.comics.store', 'method' => 'POST', 'comic' => $comic])
        
@endsection
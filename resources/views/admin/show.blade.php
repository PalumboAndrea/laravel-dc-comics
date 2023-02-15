@extends('layouts.app')

@section('main-content')

    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-6">
                <h1 class="m-4">
                    Comic:
                </h1>
            </div>
            @include('partials.backHome')
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
        
@endsection
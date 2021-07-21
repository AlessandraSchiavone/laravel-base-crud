@extends('layouts.main')

@section('content')
@if (session('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif
    <h1>{{ $comic->title }} </h1>

    <div class="row my-4">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-6 col-offset-3">
            <h4>Serie</h4>
            <p>{{ $comic->series }}</p>
            <h4>Tipo</h4>
            <p>{{ $comic->type }}</p>
            <h4>Descrizione</h4>
            <p>{{ $comic->description }}</p>
            <h4>Prezzo</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Disponibile dal</h4>
            <p>{{ $comic->sale_date }} </p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna all'elenco</a>
    </div>
@endsection
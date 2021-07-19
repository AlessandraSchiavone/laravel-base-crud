@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }} </h1>

    <div class="row my-4">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-6 col-offset-3">
            <h4>Descrizione</h4>
            <p>{{ $comic->description }}</p>
            <h4>Prezzo</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Data</h4>
            <p>{{ $comic->sale_date }} </p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna all'elenco</a>
    </div>
@endsection
  
@extends('layouts.main')

@section('content')
    <h1>Inserisci un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title">
        </div>
        <div class="form-group">
            <label for="description">Descrizione </label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4"></textarea>
          </div>
        <div class="form-group">
            <label for="thumb">Url Immagine</label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url dell'immagine" name="thumb">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci il nome della serie del fumetto" name="series">
        </div>
        <div class="form-group">
            <label for="sale_date">Data</label>
            <input class="form-control it-date-datepicker" id="sale_date" type="text" placeholder="Inserisci la data nel formato yyyy-MM-dd" name="sale_date">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di fumetto" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection
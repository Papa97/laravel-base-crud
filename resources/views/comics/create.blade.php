@extends('layouts.base')

@section('pageContent')

<h1>Aggiungi un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto">
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione del fumetto"></textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto">
    </div>
  
    <div class="form-group">
        <label for="sale_date">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita">
    </div>


    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto">
    </div>
    
    <button type="submit" class="btn btn-primary">Crea</button>
</form>


@endsection
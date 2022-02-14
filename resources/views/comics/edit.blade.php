@extends('layouts.base')

@section('pageContent')

<h1>Modifica fumetto {{$comic->title}}</h1>
<a href="{{route("comics.index")}}">
    <button type="button" class="btn btn-outline-success mt-3 mb-3">Torna alla Home</button>
</a>

<form action="{{route("comics.update", $comic->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo del fumetto" value="{{old("title") ? old("title") : $comic->title}}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione del fumetto">{{old("description") ? old("description") : $comic->description}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine" value="{{old("thumb") ? old("thumb") : $comic->thumb}}">
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price") ? old("price") : $comic->price}}">
    </div> 

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{old("series") ? old("series") : $comic->series}}">
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  
    <div class="form-group">
        <label for="sale_date">Data</label>
        <input type="date" class="form-control @error ('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita" value="{{old("sale_date") ? old("sale_date") : $comic->sale_date}}">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control @error ('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo del fumetto" 
        value="{{old("type") ? old("type") : $comic->type}}">
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Modifica</button>
</form>


@endsection
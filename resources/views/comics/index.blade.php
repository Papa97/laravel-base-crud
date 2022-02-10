@extends('layouts.base')

@section('pageContent')
<h1>Lista fumetti</h1>

<a href="{{route("comics.create")}}">
  <button type="button" class="btn btn-outline-success">Inserisci nuovo fumetto</button>
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data di uscita</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-outline-primary">Vai al prodotto</button></a>
                <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-outline-warning">Modifica</button></a>
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-outline-danger">Cancella</button>
                </form>
            </td>
           
        </tr>
    @endforeach
      
    </tbody>
  </table>

@endsection
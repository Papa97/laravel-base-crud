@extends('layouts.base')

@section('pageContent')
<h1>Lista fumetti</h1>

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
            </td>
           
        </tr>
    @endforeach
      
    </tbody>
  </table>

@endsection
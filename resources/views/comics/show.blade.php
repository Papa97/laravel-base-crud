@extends('layouts.base')

@section('pageContent')

<h1>{{$comic["title"]}}</h1>
<p>{{$comic->description}}</p>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}">
<p>Prezzo: {{$comic->price}}</p>
<p>Serie: {{$comic->series}}</p>
<p>Tipo: {{$comic->type}}</p>

<a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-outline-secondary">Modifica questo fumetto</button></a>

@endsection
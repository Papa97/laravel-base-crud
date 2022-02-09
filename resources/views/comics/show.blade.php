@extends('layouts.base')

@section('PageContent')

<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}">
<p>Prezzo: {{$comic->price}}</p>
<p>Serie: {{$comic->series}}</p>
<p>Tipo: {{$comic->type}}</p>


{{-- @dd($comic) --}}
@endsection
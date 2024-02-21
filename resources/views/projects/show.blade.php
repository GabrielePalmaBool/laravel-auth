@extends('layouts.app')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container text-center">
    <h3>Nome autore: {{ $projects -> nome_autore }}</h3>
    <h3>Titolo progetto: {{ $projects -> titolo_progetto }}</h3>
    <h3>Data di pubblicazione {{ $projects -> data_pubblicazione}}</h3>      
</div>
@endsection
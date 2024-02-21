@extends('layouts.app')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>New project</h1>
    <form action="{{route('projects.store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="nome_autore">Nome autore</label>
        <input type="text" name="nome_autore" id="nome_autore"><br><br>

        <label for="titolo_progetto">Titolo progetto</label>
        <input type="text" name="titolo_progetto" id="titolo_progetto"><br><br>

        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione"><br><br>

        <label for="data_pubblicazione">Data</label>
        <input type="date" name="data_pubblicazione" id="data_pubblicazione"><br><br>

        <input type="submit" value="CREA">
    </form>
@endsection
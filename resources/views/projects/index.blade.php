@extends('layouts.app')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Lista progetti:</h1>
    <ol>
        @foreach ($projects as $project)
            <li> 
                {{ $project -> titolo_progetto }}    
            </li>
        @endforeach
    </ol>
    <br><br><a href="{{ route('projects.create') }}">CREA NUOVO PROGETTO</a>
@endsection
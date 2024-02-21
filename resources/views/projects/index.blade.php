@extends('layouts.app')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Lista progetti:</h1>
    <ol>
        @foreach ($projects as $project)
            <li> 
                <a href="{{ route('projects.show', $project -> id) }}">
                    {{ $project -> titolo_progetto }}
                </a>   
            </li>
        @endforeach
    </ol>
    <br><br><a href="{{ route('projects.create') }}">CREA NUOVO PROGETTO</a>
@endsection
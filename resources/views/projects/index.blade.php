@extends('layouts.app')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Lista progetti:</h1>
    @auth  
    <div class="create my-4">
        <a href="{{ route('projects.create') }}">CREA NUOVO PROGETTO</a>
    </div>
    @endauth
    <ol class="d-flex justify-content-around flex-wrap">
        @foreach ($projects as $project)
            <li class="mb-5"> 
                <div class="title">
                    <h4>
                        <a href="{{ route('projects.show', $project -> id) }}">
                            {{ $project -> titolo_progetto }}
                            <div class="image">
                                <img src="{{ $project -> img_riferimento }}" alt="{{ $project -> titolo_progetto }}">
                            </div>
                        </a>
                    </h4>
                @auth                    
                <a href="{{ route('projects.edit', $project -> id) }}">Modifica</a>
                <form action="{{ route('projects.destroy', $project -> id) }}" method="POST" onsubmit="return confirm('Confermare')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Rimuovi">
                </form>
                @endauth
            </li>
        @endforeach
    </ol>
@endsection
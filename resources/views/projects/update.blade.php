@extends('layouts.app')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('projects.update', $projects->id)}}" method="POST">

  @csrf
  @method('PUT')

  <label for="nome_autore">Nome autore</label>
  <input type="text" name="nome_autore" id="nome_autore" value="{{ $projects->nome_autore }}"><br><br>

  <label for="titolo_progetto">Titolo progetto</label>
  <input type="text" name="titolo_progetto" id="titolo_progetto" value="{{ $projects->titolo_progetto }}"><br><br>

  <label for="img_riferimento">Immagine del progetto</label>
  <input class="form-control" type="file" id="img_riferimento"><br><br>

  <label for="descrizione">Descrizione</label>
  <input type="textarea" name="descrizione" id="descrizione" value="{{ $projects->descrizione }}"><br><br>

  <label for="data_pubblicazione">Data</label>
  <input type="date" name="data_pubblicazione" id="data_pubblicazione" value="{{ $projects->data_pubblicazione }}"><br><br>

  <input type="submit" value="Aggiorna">
</form>
@endsection
@extends('layouts.main')

@section('title', 'Cadastrar resultado')

@section('content')

<div id="event-create-container" class="col-md-2 offset-md-1">
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="date">DATA DA PARTIDA:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="vitoria">TIPO DE VITÓRIA:</label>
      <select class="form-select" aria-label="vitoria" id="vitoria" name="vitoria" required>
        <option value="5">TEMPO</option>
        <option value="10">OBJETIVO</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Cadastrar resultado">
  </form>
</div>

@endsection
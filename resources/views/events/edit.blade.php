@extends('layouts.main')

@section('title', 'Editando: ' . $event->partida . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div id="event-create-container" class="col-auto offset-md-1">
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <p class="card-date"><ion-icon name="calendar"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
      <label for="date">DATA DA PARTIDA:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <br>
    <div class="form-group">
      <p class="card-date"><ion-icon name="trophy"></ion-icon> {{ ($event->vitoria) }}</p>
      <label for="vitoria">TIPO DE VITÓRIA:</label>
      <select class="form-select" aria-label="vitoria" id="vitoria" name="vitoria" required>
        <option value="5">TEMPO</option>
        <option value="10">OBJETIVO</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar resultado">
  </form>
</div>

@endsection
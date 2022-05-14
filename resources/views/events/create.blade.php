@extends('layouts.main')

@section('title', 'Cadastrar resultado')

@section('content')

<div id="event-create-container" class="col-md-2 offset-md-3">
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="partida">Número da partida:</label> 
      <select class="form-select" aria-label="partida" id="partida" name="partida" required>
        <option value="Partida 01">Partida 01</option>
        <option value="Partida 02">Partida 02</option>
        <option value="Partida 03">Partida 03</option>
        <option value="Partida 04">Partida 04</option>
        <option value="Partida 05">Partida 05</option>
        <option value="Partida 06">Partida 06</option>
        <option value="Partida 07">Partida 07</option>
        <option value="Partida 08">Partida 08</option>
        <option value="Partida 09">Partida 09</option>
        <option value="Partida 10">Partida 10</option>
        <option value="Partida 11">Partida 11</option>
        <option value="Partida 12">Partida 12</option>
        <option value="Partida 13">Partida 13</option>
        <option value="Partida 14">Partida 14</option>
        <option value="Partida 15">Partida 15</option>
        <option value="Partida 16">Partida 16</option>
        <option value="Partida 17">Partida 17</option>
        <option value="Partida 18">Partida 18</option>
        <option value="Partida 19">Partida 19</option>
        <option value="Partida 20">Partida 20</option>
        <option value="Partida 21">Partida 21</option>
        <option value="Partida 22">Partida 22</option>
        <option value="Partida 23">Partida 23</option>
        <option value="Partida 24">Partida 24</option>
        <option value="Partida 25">Partida 25</option>
        <option value="Partida 26">Partida 26</option>
        <option value="Partida 27">Partida 27</option>
        <option value="Partida 28">Partida 28</option>
        <option value="Partida 29">Partida 29</option>
        <option value="Partida 30">Partida 30</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="date">Data da partida:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="participantes">Número de participantes:</label>
      <select class="form-select" aria-label="participantes" id="participantes" name="participantes" required>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="tempo">Duração da partida:</label>
      <select class="form-select" aria-label="duração" id="tempo" name="tempo" required>
        <option value="60 minutos">60 minutos</option>
        <option value="90 minutos">90 minutos</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Cadastrar resultado">
  </form>
</div>

@endsection
@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<img src="https://rtec84.s3.amazonaws.com/wg/war-grow.png" class="img-fluid" alt="Imagem responsiva" style="padding: 0.5rem;">
<div id="events-container" class="col-md-12">
    <h2>Últimos resultados...</h2>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-2">
            <div class="card-body">
                <p class="card-date"><ion-icon name="dice"></ion-icon> {{ $event->partida }}</p>
                <p class="card-date"><ion-icon name="calendar"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-date"><ion-icon name="people"></ion-icon> {{ ($event->participantes) }} Participantes</p>
                <p class="card-date"><ion-icon name="alarm"></ion-icon> {{ ($event->tempo) }}</p>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0)
            <p>Não há resultados disponíveis</p>
        @endif
    </div>
</div>

@endsection
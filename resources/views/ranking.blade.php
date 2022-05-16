@extends('layouts.main')

@section('title', 'Ranking')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-auto">
            <br>
            <table class="table table-bordered table-striped table-hover table-light table-responsive" id="ranking">

                <thead>
                    <tr>
                        <th scope="col">POSIÇÃO</th>
                        <th scope="col">NOME</th>
                        <th scope="col">PONTUAÇÃO</th>
                        <th scope="col">JOGOS</th>
                        <th scope="col">VITÓRIAS</th>
                        <th scope="col">APROVEITAMENTO</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Teste</td>
                        <td>100</td>
                        <td>10</td>
                        <td>5</td>
                        <td>50%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
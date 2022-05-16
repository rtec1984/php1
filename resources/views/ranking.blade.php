@extends('layouts.main')

@section('title', 'Ranking')

@section('content')

<div class="container">
<h1>Ranking</h1>
    <div class="row">
        <div class="col-auto">
            <br>
            <table class="table table-bordered table-striped table-hover table-light table-responsive" id="ranking">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOME</th>
                        <th scope="col">P</th>
                        <th scope="col">J</th>
                        <th scope="col">V</th>
                        <th scope="col">%</th>
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
    <p># Posição, P Pontuação, J Jogos, V Vitórias, % Aproveitamento.</p>

</div>

@endsection
@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Grupo</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <td ><a href="{{ route('grupos.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a></td>
        </div>
        <div class="col-lg-12">
            <hr>
            <h3>Semestre: {{$grupo->semestre}}</h3>
            <hr>
            <h3>Grupo: {{$grupo->grupo}}</h3>
            <hr>
            <h3>Turno: {{$grupo->turno}}</h3>
        </div>
    </div>

@endsection

@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Estudiante</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <td ><a href="{{ route('estudiantes.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a></td>
        </div>
        <div class="col-lg-12">
            <hr>
            <h3>Nombre: {{$estudiante->nombre}}</h3>
            <hr>
            <h3>Apellido Paterno: {{$estudiante->apellido_paterno}}</h3>
            <hr>
            <h3>Apellido Materno: {{$estudiante->apellido_materno}}</h3>
            <hr>
            <h3>Edad: {{$estudiante->edad}}</h3>
            <hr>
            <h3>Email: {{$estudiante->email}}</h3>
            <hr>
            <h3>Telefono: {{$estudiante->telefono}}</h3>
        </div>
    </div>

@endsection

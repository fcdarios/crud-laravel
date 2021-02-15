@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Home</h2>
            <hr>
        </div>
        <div class="col-lg-6">
            <td ><a href="{{ route('estudiantes.index') }}" class="btn btn-info btn-lg btn-block"><i class="fas fa-user-friends"></i> Estudiantes</a></td>
        </div>
        <div class="col-lg-6">
            <td ><a href="{{ route('grupos.index') }}" class="btn btn-info btn-lg btn-block"><i class="fas fa-users"></i> Grupos</a></td>
        </div>
    </div>

@endsection

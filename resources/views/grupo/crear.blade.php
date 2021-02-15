@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Agregar grupo</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <td ><a href="{{ route('grupos.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a></td>
        </div>
        @if(session()->get('alerta'))
            <div class="col-lg-12"><hr></div>
            <div class="col-lg-12 alert alert-warning text-center">
                {{ session()->get('alerta') }}
            </div>
        @endif
        <div class="col-lg-12">
            <hr>
             {!! Form::open(['url' => '/grupos/crear', 'method' => 'post']) !!}
                <div class="form-group">
                    {{Form::label('semestre', 'semestre')}}
                    {{Form::text('semestre', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('grupo', 'Grupo')}}
                    {{Form::text('grupo', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('turno', 'Turno')}}
                    {{Form::text('turno', null, ['class'=>'form-control'])}}
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Guardar
                </button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

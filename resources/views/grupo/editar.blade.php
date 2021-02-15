@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Editar datos del Grupo</h2>
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
             {{ Form::model($grupo, array('route' => array('grupos.update', $grupo->id), 'method' => 'PUT')) }}
                <div class="form-group">
                    {{Form::label('semestre', 'Semestre')}}
                    {{Form::number('semestre', $grupo->semestre, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('grupo', 'Grupo')}}
                    {{Form::text('grupo', $grupo->grupo, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('turno', 'Turno')}}
                    {{Form::select('turno', ['M' => 'M', 'V' => 'V'])}}
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Guardar
                </button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

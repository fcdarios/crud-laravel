@extends('home')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Agregar estudiante</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <td ><a href="{{ route('estudiantes.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a></td>
        </div>
        @if(session()->get('alerta'))
            <div class="col-lg-12"><hr></div>
            <div class="col-lg-12 alert alert-warning text-center">
                {{ session()->get('alerta') }}
            </div>
        @endif
        <div class="col-lg-12">
            <hr>
             {!! Form::open(['url' => '/estudiantes/crear', 'method' => 'post']) !!}
                <div class="form-group">
                    {{Form::label('nombre', 'Nombre')}}
                    {{Form::text('nombre', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('apellido_paterno', 'Apellido Paterno')}}
                    {{Form::text('apellido_paterno', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('apellido_materno', 'Apellido Materno')}}
                    {{Form::text('apellido_materno', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('edad', 'Edad')}}
                    {{Form::number('edad', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::email('email', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('telefono', 'Telefono')}}
                    {{Form::number('telefono', null, ['class'=>'form-control'])}}
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Guardar
                </button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

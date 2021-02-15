@extends('home')

@section('content')

     <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Estudiantes</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('estudiantes.crear') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
        </div>
        <div class="col-lg-12 m-0">
            <hr>
            <table id="blog-table" class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"><a>Ver</a></th>
                    <th scope="col"><a>Editar</a></th>
                    <th scope="col"><a>Borrar</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $index => $es)
                        <tr>
                            <td >{{$es->nombre}}</td>
                            <td >{{$es->apellido_paterno}}</td>
                            <td >{{$es->apellido_materno}}</td>
                            <td >{{$es->edad}}</td>
                            <td >{{$es->email}}</td>
                            <td >{{$es->telefono}}</td>
                            <td ><a href="{{ route('estudiantes.show', $es->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a></td>
                            <td ><a href="{{ route('estudiantes.editar', $es->id) }}" class="btn btn-info   "><i class="fas fa-edit"></i></a></td>
                            <td>
                                {{ Form::open(array('url' => '/estudiantes/eliminar/' . $es->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('<i class="fa fa-minus-circle" aria-hidden="true"></i>', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@extends('home')

@section('content')

     <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Grupos</h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('grupos.crear') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
        </div>
        <div class="col-lg-12 m-0">
            <hr>
            <table id="blog-table" class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Semestre</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Turno</th>
                    <th scope="col"><a>Ver</a></th>
                    <th scope="col"><a>Editar</a></th>
                    <th scope="col"><a>Borrar</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $index => $g)
                        <tr>
                            <td >{{$g->semestre}}</td>
                            <td >{{$g->grupo}}</td>
                            <td >{{$g->turno}}</td>
                            <td ><a href="{{ route('grupos.show', $g->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a></td>
                            <td ><a href="{{ route('grupos.editar', $g->id) }}" class="btn btn-info   "><i class="fas fa-edit"></i></a></td>
                            <td>
                                {{ Form::open(array('url' => '/grupos/eliminar/' . $g->id, 'class' => 'pull-right')) }}
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

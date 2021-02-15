<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante/index', ['estudiantes'=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new Estudiante();
        $e->nombre = $request->get('nombre');
        $e->apellido_paterno = $request->get('apellido_paterno');
        $e->apellido_materno = $request->get('apellido_materno');
        $e->edad = $request->get('edad');
        $e->email = $request->get('email');
        $e->telefono = $request->get('telefono');

        if(!$e->nombre || !$e->apellido_paterno || !$e->apellido_materno || !$e->edad || !$e->email || !$e->telefono)
            return redirect('/estudiantes/crear/'.$e->id)->with('alerta', 'Hay un campo vacio');
        else if($e->edad <= 0)
            return redirect('/estudiantes/crear/'.$e->id)->with('alerta', 'La edad es incorrecta');
        else if ($e->telefono < 1)
            return redirect('/estudiantes/crear/'.$e->id)->with('alerta', 'El telefono es incorrecto');
        else {
            $e->save();
            return redirect('/estudiantes')->with('success', 'Registro actualizado correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante/mostrar', ['estudiante'=>$estudiante]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante/editar', ['estudiante'=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $e = Estudiante::find($id);
        $e->nombre = $request->get('nombre');
        $e->apellido_paterno = $request->get('apellido_paterno');
        $e->apellido_materno = $request->get('apellido_materno');
        $e->edad = $request->get('edad');
        $e->email = $request->get('email');
        $e->telefono = $request->get('telefono');
        if($e->edad <= 0)
            return redirect('/estudiantes/editar/'.$e->id)->with('alerta', 'La edad es incorrecta');
        else if ($e->telefono < 1)
            return redirect('/estudiantes/editar/'.$e->id)->with('alerta', 'El telefono es incorrecto');
        else {
            $e->save();
            return redirect('/estudiantes')->with('success', 'Registro actualizado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = Estudiante::find($id);
        $e->delete();
        return redirect('/estudiantes')->with('success', 'Registro eliminado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupo/index', ['grupos'=>$grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupo/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g = new Grupo();
        $g->semestre = $request->get('semestre');
        $g->grupo = $request->get('grupo');
        $g->turno = $request->get('turno');

        if(!$g->semestre || !$g->grupo || !$g->turno)
            return redirect('/grupos/crear/'.$g->id)->with('alerta', 'Hay un campo vacio');
        else if($g->semestre <= 0)
            return redirect('/grupos/crear/'.$g->id)->with('alerta', 'El semestre es incorrecto');
        else {
            $g->save();
            return redirect('/grupos')->with('success', 'Registro actualizado correctamente');
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
        $grupo = Grupo::find($id);
        return view('grupo/mostrar', ['grupo'=>$grupo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::find($id);
        return view('grupo/editar', ['grupo'=>$grupo]);
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
        $g = Grupo::find($id);
        $g->semestre = $request->get('semestre');
        $g->grupo = $request->get('grupo');
        $g->turno = $request->get('turno');

        if(!$g->semestre || !$g->grupo || !$g->turno)
            return redirect('/grupos/editar/'.$g->id)->with('alerta', 'Hay un campo vacio');
        else if($g->semestre <= 0)
            return redirect('/grupos/editar/'.$g->id)->with('alerta', 'El semestre es incorrecto');
        else {
            $g->save();
            return redirect('/grupos')->with('success', 'Registro actualizado correctamente');
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
        $g = Grupo::find($id);
        $g->delete();
        return redirect('/grupos')->with('success', 'Registro eliminado correctamente');
    }
}

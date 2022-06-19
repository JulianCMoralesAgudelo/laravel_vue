<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{

    public function index()
    {
        $asignaturas = Asignatura::all();
        return response()->json($asignaturas);
    }

    public function store(Request $request)
    {
        Asignatura::create($request->all());
    }

    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        return response()->json($asignatura);
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->name = $request['nombre_materia'];
        $asignatura->cantidad_creditos = $request['cantidad_creditos'];
        $asignatura->docente = $request['docente'];
        $asignatura->asignatura_prerequisito = $request['asignatura_prerequisito'];
        $asignatura->horas_autonomas = $request['horas_autonomas'];
        $asignatura->horas_dirigidas = $request['horas_dirigidas'];
        $asignatura->update();
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->delete();
    }
}

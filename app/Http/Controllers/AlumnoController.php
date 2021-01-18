<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Empresa;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();

        return response()->json([
            "data" => $alumnos,
            "satus" => 200,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = Alumno::create($request->all());

        return response()->json([
            "data" => [
                "alumno" => $alumno,
                "empresa" => Empresa::find($alumno->id),
            ],
            "satus" => 202,
            "message" => "Alumno creado correctamente",
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return response()->json([
            "data" => [
                "alumno" => $alumno,
                "empresa" => Empresa::find($alumno->id),
            ],
            "satus" => 200,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        $alumno->save();

        return  response()->json([
            "data" => [
                "alumno" => $alumno,
                "empresa" => Empresa::find($alumno->id),
            ],
            "satus" => 200,
            "message" => "Alumno actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return  response()->json([
            "data" => [
                "alumno" => $alumno,
                "empresa" => Empresa::find($alumno->id),
            ],
            "satus" => 200,
            "message" => "Alumno eliminado correctamente"
        ], 200);
    }
}

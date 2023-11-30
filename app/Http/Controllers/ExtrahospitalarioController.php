<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extrahospitalario;

class ExtrahospitalarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Extrahospitalario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'idformulario' => 'required',
            'fechauso' => 'required',
            'nombrecompleto' => 'required',
            'nombrepersonaatendida' => 'required',
            'tipodocumento' => 'required',
            'numerodocumento' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'etnia' => 'required',
            'orientacionsexual' => 'required',
            'identidadgenero' => 'required',
            'condiciondiscapacidad' => 'required',
            'poblacionvictima' => 'required',
            'habitanzacalle' => 'required',
            'poblacioncampesino' => 'required',
            'direccion' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'nivelescolaridad' => 'required',
            'estratosocioeconomico' => 'required',
            'tiporegimenafiliacion' => 'required',
            'idusuario' => 'required',
        ]);

        $extrahospitalario = Extrahospitalario::create($validatedData);
        return response()->json($extrahospitalario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Extrahospitalario::find($id);
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
        //
        $item = Extrahospitalario::find($id);
        $item->update($request->all());
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Extrahospitalario::destroy($id);
    }
}

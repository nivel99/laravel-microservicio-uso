<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uso;

class UsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Uso::all();
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
            'uso_fechaevento' => 'required',
            'uso_nombrelugarevento' => 'required',
            'uso_personaatenidadeventonombre' => 'required',
            'uso_personaatenidadeventotipodocumento' => 'required',
            'uso_personaatenidadeventonumerodocumento' => 'required',
            'uso_personaatenidadeventoedad' => 'required',
            'uso_personaatenidadeventosexo' => 'required',
            'uso_personaatenidadeventoaseguradorsalud' => 'required',
            'uso_datoseventonombrepersonautorizodea' => 'required',
            'uso_datoseventotipodocumento' => 'required',
            'uso_datoseventonumerodocumento' => 'required',
            'uso_datoseventotelefono' => 'required',
            'uso_datoseventohorainicioevento' => 'required',
            'uso_datoseventohoraactivacioncadenasupervivencia' => 'required',
            'uso_datoseventohorautlizaciondea' => 'required',
            'uso_datoseventohoratrasladopersonaatendida' => 'required',
            'uso_datosmediotransportenombreenccargado' => 'required',
            'uso_datosmediotransportemediotransporte' => 'required',
            'uso_datosmediotransporteempresaambulancia' => 'required',
            'uso_datosmediotransporteobservaciones' => 'required'
        ]);
        $dea = Uso::create($validatedData);
        return response()->json($dea, 201);
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
        return Uso::findOrFail($id);
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
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use http\Message\Body;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Puesto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puesto = new Puesto;
        $puesto->inicio=$request->input('inicio');
        $puesto->propietario=$request->input('propietario');
        $puesto->placa=$request->input('placa');
        $puesto->marca=$request->input('marca');
        return $puesto;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function show(Puesto $puesto)
    {
        return Puesto::findOrFail($puesto->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Puesto $puesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puesto $puesto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        //
    }
}

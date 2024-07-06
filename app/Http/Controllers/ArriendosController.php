<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class ArriendosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Hago la variable '$vehiculos' y guardo todos los vehiculos de la bd en esta variable.(array)
        $vehiculos = Vehiculo::all();


        return view('arriendos.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Vehiculo $vehiculo)
    {
        return view('arriendos.create',compact('vehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arriendo = new Arriendo();
        $arriendo->patente = $request->patente;
        $arriendo->rut = $request->rut;
        $arriendo->dia_arriendo = $request->dia_arriendo;
        $arriendo->dia_entrega = $request->dia_entrega;
        $arriendo->total_pago = $request->total_pago;
        $arriendo->save();
        
        return redirect()->route('arriendos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arriendo $arriendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arriendo $arriendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arriendo $arriendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arriendo $arriendo)
    {
        //
    }
}

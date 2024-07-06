<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\Tipo;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
       $vehiculos = Vehiculo::all();
 
       return view('vehiculos.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $estados = ['disponible','arrendado','de_baja','en mantenimiento'];
        
        $tipos = Tipo::all();
        
        return view('vehiculos.create',compact(['estados','tipos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->patente = $request->patente;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->estado = 'disponible';
        $vehiculo->tipo_id = $request->input('tipo');

        $vehiculo->save();
        
        return redirect()->route('vehiculos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($patente)
    {
        $vehiculo = Vehiculo::findOrFail($patente);
        $vehiculo->delete();

        return redirect()->route('vehiculos.index')->with('success','Vehiculo eliminado correctamente!');
    }
}

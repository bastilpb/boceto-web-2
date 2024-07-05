<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // genero una lista de todos los tipos
        $tipos = Tipo::all();

        return view('tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all();

        return view('tipos.create',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipos = new Tipo();
        $tipos->nombre = $request->nombre;
        $tipos->costo = $request->costo;
        $tipos->id = $request->input('tipo');

        $tipos->save();

        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipos = Tipo::findOrFail($id);
        $tipos->delete();

        return redirect()->route('tipos.index')->with('success','Tipo eliminado correctamente!');
    }
}

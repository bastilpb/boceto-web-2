<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Usuario;
use App\Models\Perfil;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $usuarios = Usuario::all();


        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfiles = Perfil::all();
        return view('usuarios.create',compact('perfiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->nombre = $request->nombre;
        $usuarios->perfil_id = $request->input('perfil_id');

        $usuarios->save();
        return redirect()->route('usuarios.index');
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
        //
    }

    public function login(){
        return view('usuarios.login');

    }

    public function autenticar(Request $request){

        $credenciales = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        return back()->withErrors('Datos Incorrectos!!!')->onlyInput('email');
    }

}

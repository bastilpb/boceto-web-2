<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;


    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil');
    }


    public function nombrePerfil():String{
        return $this->perfil->nombre;
    }

    public function esAdmininistrador():bool{
        return $this->perfil->nombre == 'Administrador';
    }

    public function esFuncionario():bool{
        return $this->perfil->nombre == 'Ejecutivo';
    }

}

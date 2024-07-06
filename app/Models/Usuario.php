<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;


    public function perfil():BelongsTo{
        return $this->belongsTo(Perfil::class);
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;


    public function rol():BelongsTo{
        return $this->belongsTo(Rol::class);
    }

    public function esAdmininistrador():bool{
        return $this->rol->nombre == 'Administrador';
    }

    public function esFuncionario():bool{
        return $this->rol->nombre == 'Funcionario';
    }

}

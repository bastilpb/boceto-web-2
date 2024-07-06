<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;



    public function arriendos(): HasMany
    {
        return $this->hasMany(Arriendo::class,'rut_cliente','rut');
    }


}

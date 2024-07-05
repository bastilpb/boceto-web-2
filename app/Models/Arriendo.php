<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arriendo extends Model
{
    use HasFactory;

    protected $table = 'arriendos';
    public $timestamps = false;

    public function usuario() : BelongsTo{
        return $this->belongsTo('usuarios');
    }

    public function vehiculo() : BelongsTo{
        return $this->belongsTo('vehiculos');
    }



}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vehiculo extends Model
{
    use HasFactory;


    protected $table = 'vehiculos';
    protected $primaryKey = 'patente';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    public function tipo(): BelongsTo{
        return $this->belongsTo(Tipo::class);
    }

    public function arriendos() : HasMany{
        return $this->belongsTo(Arriendo::class);
    }


}

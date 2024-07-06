<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    public $incrementing = false;
    public $timestamps = false;



    public function arriendos()
    {
        return $this->hasMany('App\Models\Arriendo');
    }


}

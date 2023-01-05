<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;
    protected $table = "manutencoes";

    public function elevador(){

        //informa que a manutenção poderá ter sempre muitos elevadores
        return $this->hasMany('App\Models\Elevador');

    }

    public function oss()
    {
        return $this->hasOne('App\Models\Os');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elevador extends Model
{
    use HasFactory;
    protected $table = "elevadores";

    public function manutencoes(){

        //informa que a manutenção poderá ter sempre muitos elevadores
        return $this->hasMany('App\Models\Manutencao');

    }


}

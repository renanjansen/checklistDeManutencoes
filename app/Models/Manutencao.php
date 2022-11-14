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
        return $this->belongsTo('App\Models\Elevador');

    }
}

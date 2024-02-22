<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elevador extends Model
{
    use HasFactory;
    protected $table = "elevadores";

    public function manutencoes(){

        
        return $this->hasOne('App\Models\Manutencao');

    }
    public function oss()
    {
        return $this->hasMany('App\Models\Os');
    }


}

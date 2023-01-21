<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    /**
     * Informa que a manutenção poderá ter sempre muitos elevadores.
     */

class Os extends Model
{
    use HasFactory;
    protected $table = "os";


        /**
         * Informa que a Os poderá ter um elevadores.
         *
         * @return $this->hasOne('App\Models\Manutencao')
         */
    public function elevador()
    {


        return $this->hasOne('App\Models\Elevador', 'foreign_key');

    }
}

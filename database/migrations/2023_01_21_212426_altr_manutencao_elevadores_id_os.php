<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltrManutencaoElevadoresIdOs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('os', function (Blueprint $table) {
            //
            $table->renameColumn('elevadores_id', 'manutencao_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('os', function (Blueprint $table) {
            //
            $table->dropColumn('manutencao_id');
        });
    }
}

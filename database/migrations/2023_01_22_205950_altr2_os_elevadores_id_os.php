<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Altr2OsElevadoresIdOs extends Migration
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
            $table->foreign('manutencao_id')->references('id')->on('manutencoes')->change();
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
        });
    }
}

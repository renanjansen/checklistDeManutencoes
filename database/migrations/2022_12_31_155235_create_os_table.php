<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('atendimento');
            $table->string('cliente');
            $table->string('mecanico');
            $table->string('defeito');
            $table->string('solucao');
            $table->string('material');
            $table->string('imagens');
            $table->foreignId('elevadores_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('os');
    }
}

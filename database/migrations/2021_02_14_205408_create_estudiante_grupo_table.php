<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_grupo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estudiante_id');
            $table->integer('grupo_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_grupo');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // semestre, grupo, turno
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('semestre');
            $table->string('grupo',3);
            $table->string('turno', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}

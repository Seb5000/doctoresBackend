<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Doctor', function (Blueprint $table) {
            $table->id();
            //$table->string('uuid')->unique();
            $table->string('nombreCompleto')->nullable();
            $table->string('categoria')->nullable();
            $table->string('genero')->nullable();
            $table->string('fechaDeNacimiento')->nullable();
            $table->string('telefonoFijo')->nullable();
            $table->string('numeroCelular')->nullable();
            $table->string('email')->nullable();
            $table->string('especialidadKey')->nullable();
            $table->string('estado')->nullable();
            $table->nullableTimestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Doctor');
    }
}

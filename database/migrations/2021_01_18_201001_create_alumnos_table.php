<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->enum('state', ['Paid', 'Pending'])->default('Pending');
            $table->boolean('peruvian');
            $table->boolean('assistance');
            $table->string('phone', 15);
            $table->unsignedInteger('id_company');
            $table->foreign('id_company')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

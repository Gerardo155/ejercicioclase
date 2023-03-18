<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {

            $table->id();
            $table->integer('id_placa', )->unique;
            $table->string('placa_camion', 6);
            $table->string('marca', 250);
            $table->string('color', 250);
            $table->string('modelo', 250);
            $table->integer('capacidad_toneladas', );
            $table->string('transporte_codigo', 250);

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->id();
            $table->integer('nuncuota');
            $table->date('fechapago');
            $table->unsignedBigInteger('id_prestamo');
            $table->boolean('estado')->default(false);
            $table->timestamps();
            $table->foreign('id_prestamo')->references('id')->on('prestamos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuotas');
    }
}

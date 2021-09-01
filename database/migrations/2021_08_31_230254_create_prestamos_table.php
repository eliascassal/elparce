<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->unsignedBigInteger('deudors_id');
            $table->unsignedBigInteger('acreedors_id');
            $table->date('fecha');
            $table->text('descripcion');
            $table->foreign('deudors_id')->references('id')->on('users');
            $table->foreign('acreedors_id')->references('id')->on('users');
            $table->boolean('estado')->default(false);
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
        Schema::dropIfExists('prestamos');
    }
}

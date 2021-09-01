<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->unsignedBigInteger('id_cuota');            
            $table->boolean('estado')->default(false);
            $table->string('comprobante')->nullable();
            $table->text('observacion');
            $table->timestamps();
            $table->foreign('id_cuota')->references('id')->on('cuotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}

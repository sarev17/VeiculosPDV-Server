<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa',7);
            $table->string('produto',20);
            $table->string('marca',20);
            $table->string('modelo',200);
            $table->integer('exercicio');
            $table->string('cor',50);
            $table->string('renavam',20);
            $table->integer('fabricacao');
            $table->decimal('compra',8,2);
            $table->decimal('venda',8,2);
            $table->string('obs',500)->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}

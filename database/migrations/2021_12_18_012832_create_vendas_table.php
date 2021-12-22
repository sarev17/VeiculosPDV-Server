<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            
            $table->string('cliente',200);
            $table->string('cpf',14);
            $table->string('cep',9);
            $table->string('endereco',1000);
            $table->Integer('parcelas');
            $table->decimal('entrada',8,2);
            $table->decimal('mensalidade',8,2);
            $table->decimal('total',8,2);
            $table->string('placa',7);
            $table->string('produto',20);
            $table->string('marca',20);
            $table->string('modelo',100);
            $table->string('cor',20);
            $table->string('renavam',20);
            $table->Integer('fabricacao');
            $table->string('obs',200)->nullable();
            $table->Integer('pagas')->default(0);
            $table->string('status',10)->default('aberta');

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

        Schema::dropIfExists('vendas');
    }
}

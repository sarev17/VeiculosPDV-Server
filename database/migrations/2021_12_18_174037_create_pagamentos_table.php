<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venda_id');
            $table->unsignedBigInteger('user_id');
            $table->string('cliente',200);
            $table->string('cpf',14);
            $table->string('veiculo',100);
            $table->string('referencia',10);
            $table->decimal('total',8,2);

            $table->foreign('venda_id')->references('id')->on('vendas');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('pagamentos', function (Blueprint $table) {
            $table->dropForeign('pagamentos_venda_id_foreign');
        });
        Schema::table('pagamentos', function (Blueprint $table) {
            $table->dropForeign('pagamentos_user_id_foreign');
        });
        Schema::dropIfExists('pagamentos');
    }
}

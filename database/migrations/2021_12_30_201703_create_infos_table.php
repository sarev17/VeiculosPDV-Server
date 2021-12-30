<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->unsignedBigInteger('user_id');
            $table->string('cpf',100);
            $table->string('cep',20);
            $table->string('rua',100);
            $table->string('bairro',100);
            $table->string('numero',10);
            $table->string('cidade',50);
            $table->string('estado',20);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->dropForeign('infos_user_id_foreign');
        });
        Schema::dropIfExists('infos');
    }
}

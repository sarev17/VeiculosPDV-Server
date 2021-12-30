<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
            FORMA
            VLT => SOBRE VALOR TOTAL
            VSE => SOBRE VALOR TOTAL SEM A ENTRADA
            AAT => AO ANO SOBRE TOTAL *SIMPLES
            AAE => AO ANO SEM ENTRADA *SIMPLES
            AMT => AO MES SOBRE TOTAL *SIMPLES
            AME => AO MES SEM ENTRADA *SIMPLES
         */

        Schema::create('juros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->double('taxa',8,2);
            $table->string('forma',3);
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
        Schema::table('juros', function (Blueprint $table) {
            $table->dropForeign('juros_user_id_foreign');
        });
        Schema::dropIfExists('juros');
    }
}

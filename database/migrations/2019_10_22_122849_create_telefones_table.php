<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->bigIncrements('id_telefone');
            $table->biginteger('cliente_id')->unsigned();
            $table->string('titulo');
            $table->string('telefone');
            $table->timestamps();
        });

        Schema::table('telefones', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefones');
    }
}

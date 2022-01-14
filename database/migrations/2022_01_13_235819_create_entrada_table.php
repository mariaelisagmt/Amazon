<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            #PK_entrada
            $table->id()->autoIncrement()->unique();
            #Atributos
            $table->date('data_pedido');
            $table->date('data_entrada');
            $table->double('total');
            $table->double('frete');
            $table->integer('num_nf');
            $table->double('imposto');
            $table->timestamps();
            #FK_transportadora
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
        Schema::dropIfExists('entrada');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_entrada', function (Blueprint $table) {
            #PK_item_entrada
            $table->id()->autoIncrement()->unique();
            #Atributos
            $table->string('lote');
            $table->integer('qtde');
            $table->double('valor');
            #FK_produto
            #FK_entrada
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
        Schema::dropIfExists('item_entrada');
    }
}

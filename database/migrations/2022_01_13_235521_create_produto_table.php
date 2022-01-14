<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            #PK_produto
            $table->id()->autoIncrement()->unique();
            #Atributos
            $table->string('descricao');
            $table->double('peso');
            $table->boolean('controlado');
            $table->integer('qtd_min');
            $table->timestamps();
            #FK_categoria
            #FK_fornecedor
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}

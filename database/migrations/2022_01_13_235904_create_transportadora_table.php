<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportadoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportadora', function (Blueprint $table) {
            #PK_transportadora
            $table->id()->autoIncrement()->unique();
            #Atributos
            $table->string('nome');
            $table->string('endereco');
            $table->integer('num');
            $table->string('bairro');
            $table->string('cep', 9);
            $table->string('cnpj', 18)->unique();
            $table->string('insc');
            $table->string('contato');
            $table->string('tel',14);
            #FK_cidade
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
        Schema::dropIfExists('transportadora');
    }
}

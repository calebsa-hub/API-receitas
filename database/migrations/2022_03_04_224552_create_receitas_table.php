<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //nome ok
        //descrição ok
        //etapas ok
        //nivelDeDificudade ok
        //nivelDeQualidade ok
        //categoria ok 
        //fotos

        Schema::create('receitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->text('etapas');
            $table->integer('nivelDeDificuldade');
            $table->integer('nivelDeQualidade');
            $table->string('categoria');
            $table->text('foto');
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
        Schema::dropIfExists('receitas');
    }
}

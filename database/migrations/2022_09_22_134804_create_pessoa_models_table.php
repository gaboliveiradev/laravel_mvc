<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('endereco', 150)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->char('cpf', 11)->nullable();
            $table->string('rg', 20)->nullable();
            $table->date('data_nascimento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
};

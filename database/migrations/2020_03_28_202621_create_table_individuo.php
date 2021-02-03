<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIndividuo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuo', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->string('endereco', 255);
            $table->string('cep', 255);
            $table->string('cidade', 255);
            $table->string('estado', 255);
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
        Schema::dropIfExists('individuo');
    }
}

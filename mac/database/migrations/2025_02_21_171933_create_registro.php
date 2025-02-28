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
            Schema::create('registro', function (Blueprint $table ){
                $table->increments('id');
                $table->string('nomeC');
                $table->date('dataN');
                $table->string('telefone');
                $table->longText('endereco');
                $table->longText('briefing');
                $table->date('dataEmissao');
                $table->date('dateEntrega');
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
        Schema::dropIfExists('registro');
    }
};









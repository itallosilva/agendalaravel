<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->unsignedBigInteger('pessoa_id');            
            $table->string('logradouro');            
            $table->string('numero');                        
            $table->string('complemento')->nullable();            
            $table->string('bairro');            
            $table->string('cep');                        
            $table->string('cidade');            
            $table->string('uf');            
            $table->integer('tipo');
            $table->timestamps();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}

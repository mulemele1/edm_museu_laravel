<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            
            $table->string('nome_objeto');
            $table->integer('quantidade');
            $table->year('ano_fabrico');
            $table->text('funcionalidade');
            $table->text('caracteristicas');
            $table->string('fabricante');
            $table->text('constituicao');
            $table->string('localizacao');
            $table->string('estado');
            $table->date('data');
            $table->string('inventariador');
            $table->string('foto')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

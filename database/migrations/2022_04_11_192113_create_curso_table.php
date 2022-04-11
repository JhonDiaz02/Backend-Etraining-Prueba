<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre');
            $table->date('Inicio_curso')->nullable();
            $table->date('Final_curso')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('curso');
    }
};

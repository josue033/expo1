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
        Schema::create('estado', function (Blueprint $table) {
             $table->id();
             $table->tinyInteger('estado_animo')->comment('0: Muy positivo, 1: positivo, 2: Neutral, 3: Negativo, 4: Muy Negativo');
             $table->tinyInteger('emocion')->comment('0: Ansioso, 1: Alegre, 2: Optimista, 3: Triste, 4: Optimista');
             $table->tinyInteger('reacciones')->comment('0: Sudor, 1: Mareo, 2: Temblores, 3: Palpitaciones, 4: Dolor de pecho');
             $table->string('situacion')->nullable();
             $table->string('pensamientos')->nullable();
             $table->string('comportamiento')->nullable();
            $table->timestamp('fecha');
           
            $table->softDeletes();
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
        Schema::dropIfExists('estado');
    }
};

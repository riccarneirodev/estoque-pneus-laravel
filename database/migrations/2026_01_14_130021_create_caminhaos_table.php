<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('caminhaos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('modelo');
            $table->integer('quantidade_eixos')->default(9);
            $table->string('tipo')->default('');
            $table->string('marca')->default('');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('caminhaos');
    }
};

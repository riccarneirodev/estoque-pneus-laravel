<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pneus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posicao_id')->constrained('posicaos')->onDelete('cascade');
            $table->string('numero_fogo')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('vida')->default(1);
            $table->integer('km_rodados')->default(0);
            $table->date('data_instalacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pneus');
    }
};

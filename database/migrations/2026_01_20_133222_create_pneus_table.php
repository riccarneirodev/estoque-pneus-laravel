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
            $table->string('codigo')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('medida');
            $table->integer('vida')->default(1);
            $table->foreignId('caminhao_id')->constrained('caminhaos')->onDelete('cascade');
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

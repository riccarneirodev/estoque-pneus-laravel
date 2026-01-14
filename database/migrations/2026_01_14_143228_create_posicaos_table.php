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
        Schema::create('posicaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eixo_id')->constrained()->onDelete('cascade');
            $table->string('lado'); // esquerdo / direito
            $table->string('tipo'); // simples / duplo_interno / duplo_externo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function eixo() {
        return $this->belongsTo(Eixo::class);
    }
};

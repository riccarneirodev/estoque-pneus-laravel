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
        Schema::create('eixos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caminhao_id')->constrained()->onDelete('cascade');
            $table->integer('numero_eixo');
            $table->string('tipo'); // direcional ou tracao
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function caminhao() {
        return $this->belongsTo(Caminhao::class);
    }
    public function posicoes () {
        return $this->hasMany(Posicao::class);
    }
};

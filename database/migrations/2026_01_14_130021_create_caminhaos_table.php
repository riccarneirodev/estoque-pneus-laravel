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
       Schema::create('caminhoes', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('modelo');
            $table->integer('qtd_eixos')->default(9);
            $table->string('tipo')->default('');
            $table->string('marca')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function eixos(): {
        return $this->hasMany(Eixo::class);
        }
};

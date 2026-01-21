<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Schema::create('posicoes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('eixo_id')->constrained()->cascadeOnDelete();
    $table->string('lado');
    $table->string('tipo');
    $table->timestamps();
});

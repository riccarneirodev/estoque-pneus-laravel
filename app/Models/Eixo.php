<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eixo extends Model
{
    protected $fillable = [
        'caminhao_id',
        'numero_eixo',
        'tipo',
    ];

    public function caminhao()
    {
        return $this->belongsTo(Caminhao::class);
    }

    public function posicoes()
    {
        return $this->hasMany(Posicao::class);
    }
}


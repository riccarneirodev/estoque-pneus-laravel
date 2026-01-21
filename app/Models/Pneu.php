<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pneu extends Model
{
    protected $fillable = [
        'posicao_id',
        'numero_fogo',
        'marca',
        'modelo',
        'vida',
        'km_rodado',
        'data_instalacao',
    ];

    public function posicao()
    {
        return $this->belongsTo(Posicao::class);
    }
}

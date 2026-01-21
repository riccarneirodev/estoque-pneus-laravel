<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posicao extends Model
{
    protected $table = 'posicoes'; // 👈 ISSO É O MAIS IMPORTANTE

    protected $fillable = [
        'eixo_id',
        'lado',
        'tipo',
    ];

    public function eixo()
    {
        return $this->belongsTo(Eixo::class);
    }

    public function pneu()
    {
        return $this->hasOne(Pneu::class);
    }
}

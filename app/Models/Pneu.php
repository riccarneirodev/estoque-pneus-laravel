<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Caminhao;

class Pneu extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'marca',
        'modelo',
        'medida',
        'vida',
        'caminhao_id',
    ];
    
    public function caminhao()
    {
        return $this->belongsTo(Caminhao::class);
    }
}

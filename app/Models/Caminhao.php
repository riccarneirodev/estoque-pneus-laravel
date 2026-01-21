<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caminhao extends Model
{
    protected $fillable = ['placa', 'modelo', 'quantidade_eixos'];

    public function eixos()
    {
        return $this->hasMany(Eixo::class);
    }
}
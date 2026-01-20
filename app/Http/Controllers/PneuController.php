<?php

namespace App\Http\Controllers;

use App\Models\Pneu;
use App\Models\Caminhao;
use Illuminate\Http\Request;

class PneuController extends Controller
{
    public function index()
    {
        $pneus = Pneu::witch('caminhao')->get();
        return view('pneus.index', compact('pneus'));
    }

    public function create()
    {
        $caminhoes = Caminhao::all();
        return view('pneus.create', compact('caminhoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:pneus,codigo',
            'marca' => 'required',
            'modelo' => 'required',
            'medida' => 'required',
            'vida' => 'required|integer|min:1',
            'caminhao_id' => 'required|exists:caminhaos,id',
        ]);

        Pneu::create($request->all());

        return redirect('/pneus')->with('success', 'Pneu criado com sucesso!');
    }

}

Route::get('/pneus', [PneuController::class, 'index']);
Route::get('/pneus/create', [PneuController::class, 'create']);
Route::post('/pneus', [PneuController::class, 'store']);

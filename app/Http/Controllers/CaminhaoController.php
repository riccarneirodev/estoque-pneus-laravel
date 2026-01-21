<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use App\Models\Eixo;
use App\Models\Posicao;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CaminhaoController extends Controller
{
    public function index()
    {
        $caminhoes = Caminhao::all();
        return view('caminhoes.index', compact('caminhoes'));
    }

    public function create()
    {
        return view('caminhoes.create');
    }

    public function show($id)
    {
        $caminhao = Caminhao::with('eixos.posicoes.pneu')->findOrFail($id);
        $caminhao = Caminhao::with([
        'eixos.posicoes.pneu'
    ])->findOrFail($id);

        return view('caminhoes.show', compact('caminhao'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'placa' => ['required', 'string', Rule::unique('caminhaos', 'placa')],
            'modelo' => ['required', 'string'],
            'quantidade_eixos' => ['required', 'integer', 'min:1'],
        ]);

        $caminhao = Caminhao::create($validated);

        for ($i = 1; $i <= $caminhao->quantidade_eixos; $i++) {
            $eixo = Eixo::create([
                'caminhao_id' => $caminhao->id,
                'numero_eixo' => $i,
                'tipo' => $i == 1 ? 'direcional' : 'tracao',
            ]);

            foreach (['esquerda', 'direita'] as $lado) {
                foreach (['interno', 'externo'] as $tipo) {
                    Posicao::create([
                        'eixo_id' => $eixo->id,
                        'lado' => $lado,
                        'tipo' => $tipo,
                    ]);
                }
            }
        }

        return redirect()->route('caminhoes.index');
    }
}

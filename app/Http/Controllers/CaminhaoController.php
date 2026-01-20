<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|unique:caminhaos',
            'modelo' => 'required',
            'quantidade_eixos' => 'required|integer|min:1',
        ]);

        Caminhao::create($request->all());

        return redirect('/caminhoes')->with('success', 'Caminhão cadastrado com sucesso!');
    }
}

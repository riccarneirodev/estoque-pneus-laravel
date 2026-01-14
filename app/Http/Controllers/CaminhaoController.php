<?php

namespace App\Http\Controllers;

use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhaoController extends Controller
{
            public function index() {
                return view('caminhoes.index', ['caminhoes' => Caminhao::all()]);
    }


            public function store(Request $request) {
                Caminhao::create($request->all());
                return redirect()->back();
    }
}
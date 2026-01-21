@extends('layouts.app')

@section('content')
<div class="container">

    <h2>
        Caminhão {{ $caminhao->modelo }} — {{ $caminhao->placa }}
    </h2>

    <hr>

    <h4>Eixos</h4>

    @forelse ($caminhao->eixos as $eixo)
        <div class="card mb-3">
            <div class="card-header">
                <strong>Eixo {{ $eixo->numero_eixo }}</strong>
            </div>

            <div class="card-body">
                @if ($eixo->posicoes->isEmpty())
                    <p class="text-muted">Nenhuma posição cadastrada.</p>
                @else
                    <ul class="list-group">
                        @foreach ($eixo->posicoes as $posicao)
                            <li class="list-group-item d-flex justify-content-between align-items-center">

                                <div>
                                    <strong>{{ ucfirst($posicao->lado) }}</strong>
                                    — {{ $posicao->tipo }}
                                </div>

                                <div>
                                    @if ($posicao->pneu)
                                        🛞
                                        <strong>{{ $posicao->pneu->numero_fogo }}</strong>
                                    @else
                                        <a
                                            href="{{ route('pneus.create', ['posicao' => $posicao->id]) }}"
                                            class="btn btn-sm btn-outline-primary"
                                        >
                                            Instalar pneu
                                        </a>
                                    @endif
                                </div>

                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    @empty
        <p>Nenhum eixo cadastrado para este caminhão.</p>
    @endforelse

</div>
@endsection

@foreach ($caminhao->eixos as $eixo)
    <div class="card mb-3">
        <div class="card-header">
            <strong>Eixo {{ $eixo->numero_eixo }}</strong>
        </div>

        <div class="card-body">
            @if ($eixo->posicoes->isEmpty())
                <p class="text-muted">Nenhuma posição cadastrada.</p>
            @else
                <ul>
                    @foreach ($eixo->posicoes as $posicao)
                        <li>
                            {{ ucfirst($posicao->lado) }} /
                            {{ ucfirst($posicao->tipo) }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endforeach

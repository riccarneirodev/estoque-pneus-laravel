<h1>Cadastrar Pneu</h1>

<form method="POST" action="/pneus">
    @csrf

    Código: <input type="text" name="codigo"><br><br>
    Marca: <input type="text" name="marca"><br><br>
    Modelo: <input type="text" name="modelo"><br><br>
    Medida: <input type="text" name="medida"><br><br>
    Vida: <input type="number" name="vida" min="1" value="1"><br><br>

    Caminhão:
    <select name="caminhao_id">
        @foreach($caminhoes as $caminhao)
            <option value="{{ $caminhao->id }}">
                {{ $caminhao->placa }} - {{ $caminhao->modelo }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Cadastrar</button>
</form>     

<a href="/pneus">Voltar para a lista de pneus</a>
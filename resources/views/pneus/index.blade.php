<h1>Pneus Cadastrados</h1>

<a href="/pneus/create">Novo Pneu</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Código</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Medida</th>
        <th>Vida</th>
        <th>Caminhão</th>
    </tr>

    @foreach($pneus as $pneu)
    <tr>
        <td>{{ $pneu->codigo }}</td>
        <td>{{ $pneu->marca }}</td>
        <td>{{ $pneu->modelo }}</td>
        <td>{{ $pneu->medida }}</td>
        <td>{{ $pneu->vida }}</td>
        <td>{{ $pneu->caminhao->placa }}</td>
    </tr>

    @endforeach
</table>
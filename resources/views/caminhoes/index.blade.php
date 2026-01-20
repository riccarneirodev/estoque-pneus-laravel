<!DOCTYPE html>
<html>
<head>
    <title>Caminhões</title>
</head>
<body>
    <h1>Lista de Caminhões</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="/caminhoes/create">Novo Caminhão</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Eixos</th>
        </tr>

        @foreach($caminhoes as $caminhao)
        <tr>
            <td>{{ $caminhao->id }}</td>
            <td>{{ $caminhao->placa }}</td>
            <td>{{ $caminhao->modelo }}</td>
            <td>{{ $caminhao->quantidade_eixos }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

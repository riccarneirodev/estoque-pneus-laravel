<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Caminhão</title>
</head>
<body>
    <h1>Cadastrar Caminhão</h1>

    <form method="POST" action="/caminhoes">
        @csrf

        <label>Placa:</label><br>
        <input type="text" name="placa"><br><br>

        <label>Modelo:</label><br>
        <input type="text" name="modelo"><br><br>

        <label>Quantidade de Eixos:</label><br>
        <input type="number" name="quantidade_eixos" value="9"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="/caminhoes">Ver caminhões cadastrados</a>
</body>
</html>

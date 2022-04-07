<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de um novo veículo</title>
</head>
<body>
    <form method="POST" action="/index.php/veiculo/salvarnovo">
        <label>Modelo</label>
        <input type="text" name="modelo" required/>
        <br />

        <label>Marca</label>
        <input type="text" name="marca" id="marca" required/>
        <br />

        <label>Cor</label>
        <input type="text" name="cor" id="cor" required/>
        <br />

        <label>Ano</label>
        <input type="text" name="ano" required/>
        <br />

        <label>Valor</label>
        <input type="text" name="valor" required/>
        <br />

        <label>Imagem</label>
        <input type="text" name="imagem" required/>
        <br />
        <br />
        <input type="submit" value="Salvar" />
        <a href="/index.php/veiculo">Volta/Cancelar</a>

    </form>
</body>
</html>
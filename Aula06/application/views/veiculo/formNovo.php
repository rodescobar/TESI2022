<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de um novo veículo</title>
</head>
<body>
    <form method="POST" action="http://127.0.0.1/codeigniter/index.php/veiculo/novo" onSubmit="Testar()">
        <label>Modelo</label>
        <input type="text" name="modelo"/>
        <br />

        <label>Marca</label>
        <input type="text" name="marca" id="marca" required/>
        <br />

        <label>Cor</label>
        <input type="text" name="cor" id="cor" required/>
        <br />

        <label>Ano</label>
        <input type="text" name="ano"/>
        <br />

        <label>Valor</label>
        <input type="text" name="valor"/>
        <br />

        <label>Ativo</label>
        <input type="checkbox" name="ativo"/>
        <br />
        <input type="submit" value="Salvar" />

    </form>
</body>
</html>
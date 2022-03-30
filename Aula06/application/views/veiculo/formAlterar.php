<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="">
        <label>Modelo</label>
        <input type="text" name="modelo" value="<?php echo $veiculo->modelo; ?>"/>
        <br />

        <label>Marca</label>
        <input type="text" name="marca" id="marca" value="<?php echo $veiculo->marca; ?>" required/>
        <br />

        <label>Cor</label>
        <input type="text" name="cor" id="cor" value="<?php echo $veiculo->cor; ?>" required/>
        <br />

        <label>Ano</label>
        <input type="text" name="ano" value="<?php echo $veiculo->ano; ?>"/>
        <br />

        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $veiculo->valor; ?>"/>
        <br />

        <label>Imagem</label>
        <input type="text" name="imagem" value="<?php echo $veiculo->imagem; ?>"/>
        <br />
        
        <br />
        <input type="submit" value="Salvar" />

    </form>
</body>
</html>
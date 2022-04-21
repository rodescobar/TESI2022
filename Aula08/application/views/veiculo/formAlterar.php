<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/veiculo/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $veiculo->id; ?>"/>

        <label>Modelo</label>
        <input type="text" name="modelo" value="<?php echo $veiculo->modelo; ?>"/>
        <br />

        <label>Marca</label>
        <input type="text" name="marca" id="marca" value="<?php echo $veiculo->marca; ?>" required/>
        <br />

        <label>Cor</label>
        <select name="cor" required>
            <option value="">Escolha a cor</option>
            <?php echo $opcoes; ?>
        </select>
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
        <a href='/index.php/veiculo'>Voltar/Cancelar</a>

    </form>
</body>
</html>
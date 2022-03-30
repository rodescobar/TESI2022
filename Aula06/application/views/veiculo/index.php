<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1>Listagem de veículos da loja</h1>

    <table border="1" >
        <tr>
            <td></td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Cor</td>
            <td>Valor</td>
        </tr>
        <?php echo $tabela; ?>
    </table>
</body>
</html>
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
            <td>Marca</td>
            <td>Modelo</td>
            <td>Cor</td>
            <td>Valor</td>
        </tr>
        <?php echo $tabela; ?>
    </table>

    <?php
        foreach($lista_veiculos as $item ) {
            echo '
                <div style="border: 1px #ccc solid;
                            border-radius: 5px;
                            padding: 5px;
                            width: 150px; 
                            height: 175px; 
                            float: left;
                            margin: 10px;
                        "> 
                    <div>
                        <img src="' . $item->imagem .'" 
                            style="width: 150px; max-height: 80px" />
                    </div>
                    <div style="text-align: center">
                        <h1 style="font-size: 10px">' . $item->modelo .'</h1>
                        <h2 style="font-size: 9px">' . $item->marca .'</h2>
                        <h3 style="font-size: 8px">' . $item->ano .'</h3>
                        <h3 style="font-size: 8px">' . $item->cor .'</h3>
                        <h3 style="font-size: 8px">R$ ' . $item->valor .'</h3>
                    </div>
                </div>                
            ';
        }    
    ?>
</body>
</html>
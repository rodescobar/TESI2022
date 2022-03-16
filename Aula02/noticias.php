<?php

    mysql_connect("127.0.0.1", "root", "");
    mysql_select_db("aula01");

    $sql = "SELECT * FROM noticias";

    $retorno = mysql_query($sql);

    echo "<table><tr>
            <td>Noticia</td><td>Prévia</td>
        <tr>";

    while($linha = mysql_fetch_assoc($retorno)) {
        echo "<tr><td>" .
            "<a href='noticia.php?id=" . $linha["id"] . "'>" .
                $linha["titulo"] .
            "</a></td><td>" .
                $linha["texto"] .
            "</tr>";
    }
    echo "</table>";
?>
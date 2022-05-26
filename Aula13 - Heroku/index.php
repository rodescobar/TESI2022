<?php
    $db = mysqli_connect('remotemysql.com','bhaz6sXv9w', 'h9RTK60IpP', 'bhaz6sXv9w')
        or die ("Falha ao conectar");

    $sql = "SELECT * FROM nome";

    $recordset = mysqli_query($db, $sql);

    $resultado = mysqli_fetch_all( $recordset );

    var_dump( $recordset );
?>
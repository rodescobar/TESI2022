<?php

    //$db = new mysqli("127.0.0.1","root","","aula01");

    mysql_connect("127.0.0.1", "root", "");
    mysql_select_db("aula01");


    $usuario = str_replace($_POST["usuario"],"--","");
    $senha = str_replace($_POST["senha"],"-- ","");

    $sql = "
    SELECT
	    *
    FROM usuario
    WHERE 
		usuario='" . $usuario . "'
		AND senha='" . $senha . "'
    ";

    echo $sql . "<br>";
    $retorno = mysql_query($sql);
    var_dump(mysql_fetch_assoc($retorno));
    
    //$retorno = $db->query($sql);
    //var_dump($retorno->fetch_assoc());

?>
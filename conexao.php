<?php

    $servidor= "localhost";
    $usuario= "root";
    $password= "";
    $dbname= "cadastro";

    $conexao= mysqli_connect($servidor, $usuario, $password, $dbname);
    if(!$conexao){

        die(" Houve um erro: ".mysqli_connect_error());

    }

?>
<?php

    include("conexao.php");

    
    $modelo=$_POST['modelo'];
    $fabricante=$_POST['fabricante'];
    $ano=$_POST['ano'];
    $km=$_POST['km'];


    $sql="INSERT INTO cadastro(modelo, fabricante, ano, km) 
        VALUES ('$modelo', '$fabricante', '$ano', '$km')";

    if(mysqli_query($conexao, $sql)){

        echo ("Veículo cadastrado com sucesso!");
    }
// Tempo de espera em segundos (por exemplo, 5 segundos)
$tempoEspera = 3;

// Cabeçalho de redirecionamento para a página de cadastro após o tempo de espera
header("refresh:$tempoEspera;url=http://localhost/projeto/veiculos_cadastrados.php");


// Encerrar o script para evitar que o restante da página seja exibido
exit();


?>


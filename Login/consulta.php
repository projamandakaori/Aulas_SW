<?php

include_once "conexao.php";

$nome = $_GET['nome']; //pegou com o ajax no js

// Executando consulta SQL
$query1 = "SELECT * FROM usuarios where nome='$nome';";
$result1 = mysqli_query($link, $query1) ; 
$res1 = mysqli_fetch_row($result1);

if(!$res1){ //se for diferente de res1
    //  Liberando memória
    mysqli_free_result($result1);
    // Fechando conexão
    mysqli_close($link);
 
    echo 0;
    return 0;
}else{
    echo 1;
    return 0; //parar o código
}


?> 
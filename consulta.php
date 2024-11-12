<?php

$nome = $_GET['nome']; //pegou com o ajax no js

//banco de dados
$link = mysqli_connect("127.0.0.1", "root", "", "test");
 
// Executando consulta SQL
$query1 = "SELECT * FROM usuarios where nome='$nome';";
$result1 = mysqli_query($link, $query1) ; 
$res1 = mysqli_fetch_row($result1);

if(!$res1){ //se for diferente de res1
    echo "Não encontrei";
    return 0;
}else{
    echo "Achei";
    return 0; //parar o código
}

//  Liberando memória
mysqli_free_result($result1);


// Fechando conexão
mysqli_close($link);

?> 
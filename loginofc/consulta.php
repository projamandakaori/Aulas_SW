<?php

session_start();
$_SESSION['login'] = '';
$_SESSION['status'] = 0;

include_once "conexao.php";

$user = $_GET['user']; //pegou dados com o ajax no js
$pass = $_GET['pass']; 
$idade = $_GET['idade']; 
$rm = $_GET['rm'];
$tel = $_GET['tel'];

//Select já dá retorno, não é necessário a $res1 = mysqli_fetch_row($result1);
$query1 = "SELECT * FROM users where user= '$user' and pass = MD5('$pass');";
$result1 = mysqli_query($link, $query1); 
$res1 = mysqli_fetch_row($result1);

if(!$res1){ 
     //  Liberando memória
    mysqli_free_result($result1);
     // Fechando conexão
    mysqli_close($link);
    echo 0;
    return 0;
}else{
    $queryInsert = "INSERT INTO users (user, pass, idade, rm, telefone) VALUES ('$user', MD5('$pass'), '$idade', '$rm', '$tel')";
    
    if (mysqli_query($link, $queryInsert)) {
        // Se os dados forem inseridos com sucesso, configura as sessões
        $_SESSION['login'] = $user;
        $_SESSION['status'] = 1;

        mysqli_free_result($result1);
        mysqli_close($link);
        echo 1;  // Retorna 1 para indicar sucesso
        return 0;
    } else {
        // Se falhar na inserção dos dados, retorna 0
        mysqli_free_result($result1);
        mysqli_close($link);
        echo 0;  // Falha na inserção dos dados
        return 0;  //parar o código
    }
}


?> 
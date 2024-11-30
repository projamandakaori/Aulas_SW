<?php

session_start();
$_SESSION['login'] = '';
$_SESSION['status'] = 0;

include_once "conexao.php";

$user = $_GET['user']; 
$pass = $_GET['pass']; 

//Select já dá retorno, não é necessário a $res1 = mysqli_fetch_row($result1);
$query1 = "SELECT * FROM users where user= '$user' and pass = MD5('$pass');";
$result1 = mysqli_query($link, $query1); 
$res1 = mysqli_fetch_row($result1);

if(!$res1){ 
    
    mysqli_free_result($result1);
    
    mysqli_close($link);
 
    echo 0;
    return 0;
}else{ 
    mysqli_free_result($result1);
    mysqli_close($link);
    $_SESSION['login'] = $user;
    $_SESSION['status'] = 1;
    echo 1;
    return 0;
}

?> 
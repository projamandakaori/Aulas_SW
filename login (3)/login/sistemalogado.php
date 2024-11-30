<?php

session_start();
//Para não burlar escrevendo o nome no código. Função obrigatório abrir essa sessão

//Destrói todas sessões, botão deslogar
if(isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php'); //Redireciona para a página de login
    exit();
}

//Protege o usuário de entrar diretamente na tela de logado
if(!isset($_SESSION['login'])){ //verifica se existe
    header("location: index.php");
}elseif( $_SESSION['login'] == ""){
    header("location: index.php");
}elseif(!isset($_SESSION['status'])){
    header("location: index.php");
}elseif($_SESSION['status'] !=1){
    header("location: index.php");
}else{
    echo "Página acessada!";
}

?>

<br><br>
<button onclick="deslogar()">Deslogar</button>

<script>
    function deslogar(){
        window.location.href = "?logout=true"; //Direciona para a página que já está, como se fosse um F5. 
    }
</script>


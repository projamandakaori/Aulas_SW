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
    echo "Bem-Vindo(a) ao Sistema Logado. A Página foi acessada com sucesso.";
}

?>
<br><br><br>
<img src="natal.png" alt="Feliz Natal">

<br><br><br><br><br><br><br><br><br><br>
<button class="btn" onclick="deslogar()">Deslogar</button>
<br><br><br>
<button class="btn" onclick="alterarDados()">Alterar dados</button>

<script>
    function deslogar(){
        window.location.href = "?logout=true"; //Direciona para a página que já está, como se fosse um F5. 
    }

    function alterarDados() {
        window.location.href = "alterardados.php"; // Redireciona para a página de alteração
    }
</script>

<style>

    img{
    width: 300px;
    height: 150px;
    right: 1550px; position:absolute;
    }
    body{
        background-color: #ffe7f1
    }
    .btn{
    background-color: #f72585;
    color: #fff;
    font-size: 15px;
    font-weight: 50px;
    transition: all linear 160ms;
    cursor: pointer;
    width: 150px;
    height: 30px;
    border: 1px solid transparent; 
    border-radius: 15px; 
    outline: none; 
    text-align: center;
    margin-top: 15px; 
    margin-left: 120px; 
    margin-right: 15px;
    
    }
</style>


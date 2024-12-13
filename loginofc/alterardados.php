<?php
session_start();

// Proteção para garantir que o usuário está logado
if (!isset($_SESSION['login']) || $_SESSION['status'] != 1) {
    header("Location: index.php");
    exit();
}

// Conexão com o banco de dados
include_once "conexao.php";

// Recuperar os dados do usuário logado
$user = $_SESSION['login'];
$query = "SELECT * FROM users WHERE user = '$user'";
$result = mysqli_query($link, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);
} else {
    echo "Erro ao carregar os dados.";
    exit();
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
</head>
<body>
    <h2>Alterar Dados</h2>
    <form method="POST" action="salvardados.php" class="formLogin">

        <label>Nome</label>
        <input type="text" id="idUser" value="<?php echo $dados['user']; ?>" required><br><br>

        <label>Senha</label>
        <input type="text" id="idPass" value="<?php echo $dados['pass']; ?>" required><br><br>

        <label>Idade</label>
        <input type="number" id="idIdade" value="<?php echo $dados['idade']; ?>" required><br><br>

        <label>RM</label>
        <input type="text" id="idRM" value="<?php echo $dados['rm']; ?>" required><br><br>

        <label>Telefone</label>
        <input type="text" id="idTel" value="<?php echo $dados['telefone']; ?>" required><br><br>

        <br>
        <button class="btn" type="submit">Salvar Alterações</button>
    </form>
    <br><br>
    <button class="btn" onclick="window.location.href='sistemalogado.php'">Cancelar</button>
</body>

<style>
    h2{
        font-family: 'Inter', sans-serif;
    }
    body{
        background-color: #ffe7f1;
    }
    .btn{
    background-color: #f72585;
    color: #fff;
    font-size: 15px;
    font-weight: 50px;
    transition: all linear 160ms;
    cursor: pointer;
    margin: 0 !important;
    width: 150px;
    height: 30px;
    border: 1px solid transparent; 
    border-radius: 15px; 
    outline: none;
    }

    
    .formLogin input {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    margin-top: 5px;
    border-radius: 4px;
    transition: all linear 160ms;
    outline: none;
}

</style>
</html>

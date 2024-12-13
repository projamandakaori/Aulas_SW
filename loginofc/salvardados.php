<?php
session_start();

// Conexão com o banco de dados
include_once "conexao.php";

// Dados enviados pelo formulário
$user = $_SESSION['user'];
$pass = $_POST['pass'];
$idade = $_POST['idade'];
$rm = $_POST['rm'];
$telefone = $_POST['telefone'];

// Atualizar os dados no banco de dados
$query = "UPDATE users SET user = '$user', pass = '$pass', idade = '$idade', rm = '$rm', telefone = '$telefone' WHERE user = '$user'";

if (mysqli_query($link, $query)) {
    echo "<script>
        alert('Dados alterados com sucesso!');
        window.location.href = 'sistemalogado.php';
    </script>";
} else {
    echo "<script>
        alert('Erro ao alterar os dados.');
        window.location.href = 'alterardados.php';
    </script>";
}

mysqli_close($link);
?>

<?php 

//Definindo perguntas e opções
$questao = "Qual a capital da França?";
$opcao = ["Barcelona", "Paris", "Tóquio", "Brasília"];
$respostaCorreta = "Paris";

//Iniciliazando variáveis
$respostaUsuario = ""; //Armazena a resposta do usuário
$mensagem = ""; //Armazena o feedback para o usuário

//Verificação se o form foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //obtendo a reposta selecionada pelo usuário
    $respostaUsuario = $_POST['resposta'];

    //comparando a resposta do usuario com a correta
    if ($respostaUsuario == $respostaCorreta){
        $mensagem = "Correto, Paris é capital da França!";
    }else{
        $mensagem = "Incorreto, a resposta certa é: $respostaCorreta.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <style>
        .feedback{
            text-align: center;
            border: 1px solid black;
            background-color: #a5b9ff;
            border-radius: 15px;
            color: #760501;
            font-size: 25px;
            font-family: system-ui;
            width: 50%;
            margin: auto;
            display: block;

        }
        h1{
            text-align: center;
            border: 1px solid black;
            background-color: #a5b9ff;
            border-radius: 15px;
            color: #3f5da6;
            margin: 10px black;
            font-family: system-ui;
        }
        button{
            justify-content: center;
            font-size: 20px;
            text-align:  center;
            font-family: system-ui;;
            display: flex;
            margin: auto;
            background-color: #a5b9ff;
            width: 80px;
            height: 30px;
            color: #3f5da6;
            border-color: #486f7c;
            justify-content: center;
            font-weight: bold;
            
        }
        body{
            background-color: #f0f5f5;
        }
        img{
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <div id="quiz">
        <h1>Quiz de Capitais</h1>
        <form action="" method="POST">
            <fieldset> <!--é uma linha que fica em volta do form-->
                <legend><?= htmlspecialchars($questao) ?></legend>
                <?php foreach ($opcao as $listaOpcoes): ?>
                    <label>
                        <input type="radio" name="resposta" value="<?= htmlspecialchars($listaOpcoes)?>" required>
                        <?= htmlspecialchars($listaOpcoes) ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
            <br>
            <button type="submit">Enviar</button>
        </form>

    <!--Exibir feedback -->
    <br>
    <?php if($mensagem): ?>
        <div class="feedback"><?= htmlspecialchars($mensagem)?></div>
    <?php endif; ?>
    </div>

    <br>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnzhgSXHXNEqdYGpUzEnRBs7bbSAIsPk63qw&s" alt="Paris">
</body>
</html>




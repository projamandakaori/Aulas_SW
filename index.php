<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<style>
		body{
		background-color: #eae0db;
		}

		h1{
		font-family: Verdana, sans-serif;
		}

		.cadastro{
		display: flex;
		align-items: center;
		justify-content: center;
		gap: 20px; /* Espaçamento */
		background-color: white; 
		border: 1px solid black;
		height: 50px; 

		}

		.cadastro input, .cadastro select{
		padding: 5px;
		}

		.cronometro{
		text-align: center;
		}

		.cronometro input{
			margin-left: 10px;
		}

		h1{
		text-align: center;
		}
	
		.coluna{
		padding: 2em 15em;
		}

		.perguntas{
			
		display: flex;
    	flex-wrap: wrap;
		}

		.botaoEnviar{
		background-color: white;
		border: 1px solid black;
		display: flex;
        justify-content: center; 
		width: 100px;
		height: 30px;
		margin: auto;
		font-size: 15px;
		}
		
	</style>
</head>
<body>
	<h1>QUIZ: MATEMÁTICA</h1>

	<!--cronometro-->
	<div class="cronometro">
	Seu tempo na página:<input type="number" id="txtNumero" value="0" readonly>
	</div>

	<br>
	
	<!--cadastro-->
	<form name="formpergunta" method="POST" onsubmit="return calcularResultados();">
		<div class="cadastro">
		Nome:<input type="text" value="" id="txtNome" name="Nome" REQUIRED> 
		Idade: <input type="number" value="" id="txtIdade" name="Idade" REQUIRED> 
		E-mail: <input type="text" value="" id="txtEmail" name="Email" REQUIRED> 
		Escolaridade: 
	<select id="cmbEscolaridade" name="Escolaridade" REQUIRED>
        <option value="1">Básica</option>
        <option value="2">Profissionalizante</option>
		<option value="3">Superior</option>
        <option value="4">Outro</option>
    </select>
		</div>
    
		<div class="perguntas">
	<div class="coluna">
	<p>1) Quanto é 7x2?</p>
	<label>
		<input type="radio" name="questao1" value="1" /> A) 14;</label>
	<br />
	<label>
	<input type="radio" name="questao1" value="0" /> B) 15;</label>
	<br />
	<label>
	<input type="radio" name="questao1" value="0" /> C) 16;</label>
	<br />
	<label>
	<input type="radio" name="questao1" value="0" /> D) 17.</label>
	<br />
	<br />

	<!--questao2-->
	<p>2) Quanto é 5+2?</p>
	<label>
		<input type="radio" name="questao2" value="0" /> A) 3;</label>
	<br />
	<label>
	<input type="radio" name="questao2" value="0" /> B) 5;</label>
	<br />
	<label>
	<input type="radio" name="questao2" value="0" /> C) 6;</label>
	<br />
	<label>
	<input type="radio" name="questao2" value="1" /> D) 7.</label>
	<br />
	<br />

	<!--questao3-->
	<p>3) Quanto é 10/5?</p>
	<label>
		<input type="radio" name="questao3" value="0" /> A) 1;</label>
	<br />
	<label>
	<input type="radio" name="questao3" value="1" /> B) 2;</label>
	<br />
	<label>
	<input type="radio" name="questao3" value="0" /> C) 10;</label>
	<br />
	<label>
	<input type="radio" name="questao3" value="0" /> D) 11.</label>
	<br />
	<br />

	<!--questao4-->
	<p>4) Quanto é 2^2?</p>
	<label>
		<input type="radio" name="questao4" value="0" /> A) 1;</label>
	<br />
	<label>
	<input type="radio" name="questao4" value="0" /> B) 2;</label>
	<br />
	<label>
	<input type="radio" name="questao4" value="0" /> C) 3;</label>
	<br />
	<label>
	<input type="radio" name="questao4" value="1" /> D) 4.</label>
	<br />
	<br />

	
	<!--questao5-->
	<p>5) Qual é o nome da figura geométrica que possui seis lados?</p>
	<label>
		<input type="radio" name="questao5" value="0" /> A) Triângulo;</label>
	<br />
	<label>
	<input type="radio" name="questao5" value="0" /> B) Quadrado;</label>
	<br />
	<label>
	<input type="radio" name="questao5" value="1" /> C) Hexágono;</label>
	<br />
	<label>
	<input type="radio" name="questao5" value="0" /> D) Losango.</label>
	<br />
	<br />

	</div>

	<div class="coluna">
	<!--questao6-->
	<p>6) Qual é o número que está faltando na sequência: 2, 4, 6, ___, 10?</p>
	<label>
		<input type="radio" name="questao6" value="0" /> A) 7;</label>
	<br />
	<label>
	<input type="radio" name="questao6" value="1" /> B) 8;</label>
	<br />
	<label>
	<input type="radio" name="questao6" value="0" /> C) 12;</label>
	<br />
	<label>
	<input type="radio" name="questao6" value="0" /> D) 14.</label>
	<br />
	<br />

	<!--questao7-->
	<p>7) Selecione o único número primo par.</p>
	<label>
		<input type="radio" name="questao7" value="1" /> A) 2;</label>
	<br />
	<label>
	<input type="radio" name="questao7" value="0" /> B) 4;</label>
	<br />
	<label>
	<input type="radio" name="questao7" value="0" /> C) 6;</label>
	<br />
	<label>
	<input type="radio" name="questao7" value="0" /> D) 8.</label>
	<br />
	<br />

	<!--questao8-->
	<p>8) Quantos segundos há em um dia?</p>
	<label>
		<input type="radio" name="questao8" value="0" /> A) 84,400 segundos;</label>
	<br />
	<label>
	<input type="radio" name="questao8" value="0" /> B) 85,400 segundos;</label>
	<br />
	<label>
	<input type="radio" name="questao8" value="1" /> C) 86,400 segundos;</label>
	<br />
	<label>
	<input type="radio" name="questao8" value="0" /> D) 87,400 segundos.</label>
	<br />
	<br />

	<!--questao9-->
	<p>9) Quem descobriu as leis da alavanca e da polia?</p>
	<label>
		<input type="radio" name="questao9" value="1" /> A) Arquimedes;</label>
	<br />
	<label>
	<input type="radio" name="questao9" value="0" /> B) Pitágoras;</label>
	<br />
	<label>
	<input type="radio" name="questao8" value="0" /> C) Newton;</label>
	<br />
	<label>
	<input type="radio" name="questao8" value="0" /> D) René Descartes.</label>
	<br />
	<br />

	<!--questao10-->
	<p>10) Quem descobriu o Símbolo do Infinito"∞"?</p>
	<label>
		<input type="radio" name="questao10" value="0" /> A) John F. Kennedy;</label>
	<br />
	<label>
	<input type="radio" name="questao10" value="0" /> B) John Wick;</label>
	<br />
	<label>
	<input type="radio" name="questao10" value="0" /> C) John Lennon;</label>
	<br />
	<label>
	<input type="radio" name="questao10" value="1" /> D) John Wallis.</label>
	<br />
	<br />
	</div>
		</div>

<!--botão enviar-->
<br>
<input type="submit" value="Enviar" id="BtnEnviar" name="Botao" class="botaoEnviar">

	</form>
</body>
</html>

<script>
		//cronometro
		$(document).ready(function(){
			let tempoTotal = 0;
			const cronometro = setInterval(() => {
				tempoTotal++;
				document.getElementById('txtNumero').value = tempoTotal;
			}, 1000); // Incrementa o tempo a cada segundo

			// Função para calcular resultados ao enviar o formulário
			window.calcularResultados = function() { //window serve p/ chamar essa função de qualquer lugar em seu script
				clearInterval(cronometro); // Para o cronômetro

				let acertos = 0;
				const totalPerguntas = 10;

				// acertos
				for (let i = 1; i <= totalPerguntas; i++) {
					const resposta = document.querySelector(`input[name="questao${i}"]:checked`);
					if (resposta && resposta.value == "1") {
						acertos++;
					}
				}

				// Exibe o alerta com o tempo e os acertos
				alert(`Tempo total: ${tempoTotal} segundos\nAcertos: ${acertos}`);

				return false; // Evita o envio do formulário
			}
		});
	</script>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
	// Respostas corretas para cada questão
	$respostasCorretas = array(
        'questao1' => '1', 
        'questao2' => '1', 
        'questao3' => '1', 
        'questao4' => '1', 
        'questao5' => '1', 
        'questao6' => '1', 
        'questao7' => '1',
        'questao8' => '1', 
        'questao9' => '1', 
        'questao10' => '1' 
    );

	$acertos = 0;
	// Verifica cada resposta
    foreach ($respostasCorretas as $questao => $respostaCorreta) { //Foreach estrutura de repetição que permite percorrer os elementos de uma coleção ou array, 
        if (isset($_POST[$questao]) && $_POST[$questao] == $respostaCorreta) { //isset serve p/ variável está definida e não é null
            $acertos++; 
        }
    }
}

?>
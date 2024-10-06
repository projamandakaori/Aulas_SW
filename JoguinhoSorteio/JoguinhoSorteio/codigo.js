$(document).ready(function(){

    //Parte em que o número é sorteado
    var resposta = 1 + Math.floor(Math.random() * 100);
    var tentativas = 0;

    //Clicar no botão "Verificar"
    $("#btnVerificar").on("click", function(){
    var verificar = $("#txt").val();   

    //Parte em que aparece alert para cada caso que o usuário faça
    if(verificar === ""){
        alert("Digite um número");
    } else if(verificar < resposta) {
        alert("O número digitado é maior!");
    } else if(verificar > resposta) {
        alert("O número digitado é menor!");
    } else {
        alert("Você acertou o número em " + tentativas + " tentativa(s)!");
    }
    });

});
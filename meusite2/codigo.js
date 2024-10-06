$(document).ready(function(){

    //valor do contador
    var valor = 0;

    //soma-se 1 na variável cada vem que a função é chamada
    function cronometro(){
        valor++

    //valor do input
        $('#txtNumero').val(valor);
    }

    //1000 milissegundos equivalem a 1 segundo
    setInterval(cronometro, 1000);

})
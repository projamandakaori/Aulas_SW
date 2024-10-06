$(document).ready(function(){

$("#btNome").on("click",function(){
    var nome = $("#txtNome").val();
})
    
$("#btidade").on("click",function(){
    var data = $("#txtidade").val();   
})

$("#btcpf").on("click",function(){
    var cpf = $("#txtcpf").val();   
})

$("#bttel").on("click",function(){
    var tel = $("#txttel").val();   
})

$("#btend").on("click",function(){
    var end = $("#txtend").val();   
})

$( "#btgenero" ).on( "click", function(){
    var genero = $("#cmbGenero").val();
})

$( "#btcivil" ).on( "click", function(){
    var civil = $("#cmbcivil").val();
})

$( "#btcidade" ).on( "click", function(){
    var cidade = $("#cmbCidade").val();
})

$( "#btestado" ).on( "click", function(){
    var estado = $("#cmbEstado").val();
})

})

if($("#cmbGenero").val() == ""){
    alert=("Preencha seu dado");
    return 0;
}else if($("#cmbcivil").val() == ""){
    alert=("Preencha seu dado");
    return 0;
}else if($("#cmbCidade").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#cmbEstado").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#txtNome").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#txtidade").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#txtcpf").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#txttel").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else if($("#txtend").val() == ""){
    alert=("Preencha seu dado");
    return 0;}
else{

$("#btcad").on("click", function(){    
   
    var nome = $("#txtNome").val();
    var idade = $("#txtidade").val();
    var cpf = $("#txtcpf").val();
    var tel = $("#txttel").val();
    var end = $("#txtend").val();
    var genero = $("#cmbGenero").val();
    var civil = $("#cmbcivil").val();
    var cidade = $("#cmbCidade").val();
    var estado = $("#cmbEstado").val();
    
    var cadastro = 'Nome:' +  nome + '\nIdade: '+ idade + '\nCPF:' + cpf + '\nTelefone: ' + tel + '\nEndereço: ' + end + '\nGênero: ' + genero + '\nEstado Civil: ' + civil + '\nCidade: ' + cidade + '\nEstado: ' + estado;

    alert(cadastro);

    })
};



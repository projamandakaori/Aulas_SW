$(document).ready(function() {

    $(document).on("click", "#btnEnviar", function () {
    
        if($("#nome").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }
    
        if($("#senha").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }
    
        $.ajax({ 
            type: "GET",
            url: "consulta.php",
            data: "user=" + $("#idUser").val() + "&pass=" + $("#idPass").val(),
            //para dividir colocar 
            async: false,
            success: function (ret) {
                if (ret==1){
                    window.location.href = "sigilo.php";
                }else{
                    alert("Login não encontrado!");
                }
            }
        });
    
    });
    
    });
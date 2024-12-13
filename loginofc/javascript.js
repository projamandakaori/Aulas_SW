$(document).ready(function() {

    $(document).on("click", "#btnEnviar", function () {
    
        if($("#idUser").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }
    
        if($("#idPass").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }

        if($("#idIdade").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }

        if($("#idRM").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }

        if($("#idTel").val() == ""){
            alert("Preencha todos os campos!");
            return 0;
        }
    
        $.ajax({ 
            type: "GET",
            url: "consulta.php",
            data: "user=" + $("#idUser").val() + "&pass=" + $("#idPass").val() + "&idade=" + $("#idIdade").val() + "&rm=" + $("#idRM").val() + "&tel=" + $("#idTel").val(),
            //para dividir colocar &
            async: false,
            success: function (ret) {
                if (ret==1){
                    alert("Dados enviados com sucesso! Confirme seus dados: \nuser: " + $("#idUser").val() + " \npass: " + $("#idPass").val() + "\nidade: " + $("#idIdade").val() + "\nrm: " + $("#idRM").val() + "\ntel: " + $("#idTel").val());
                    window.location.href = "sistemalogado.php";
                }else{
                    alert("Login não encontrado!");
                }
            }
        });
    
    });
    
    });
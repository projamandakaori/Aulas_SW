<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="javascript.js"></script>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    color: #023047;
}

.page {
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background-color: #ffe7f1;
}

.formLogin {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 7px;
    padding: 40px;
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
    gap: 5px
}

.areaLogin img {
    width: 420px;
}

.formLogin h1 {
    padding: 0;
    margin: 0;
    font-weight: 500;
    font-size: 2.3em;
}

.formLogin p {
    display: inline-block;
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
}

.formLogin input {
    padding: 15px;
    font-size: 14px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    margin-top: 5px;
    border-radius: 4px;
    transition: all linear 160ms;
    outline: none;
}


.formLogin input:focus {
    border: 1px solid #f72585;
}

.formLogin label {
    font-size: 14px;
    font-weight: 600;
}

.formLogin a {
    display: inline-block;
    margin-bottom: 20px;
    font-size: 13px;
    color: #555;
    transition: all linear 160ms;
}

.formLogin a:hover {
    color: #f72585;
}

.btn {
    background-color: #f72585;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    transition: all linear 160ms;
    cursor: pointer;
    margin: 0 !important;
    width: 400px;
    height: 30px;
    border: 1px solid transparent; 
    border-radius: 15px; 
    outline: none;

}

.btn:hover {
    transform: scale(1.05);
    background-color: #ff0676;

}
    </style>
</head>

<body>
<div class="page">
        <div class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>

            <label>Nome</label>
            <input type="text" placeholder="Digite seu nome" id="idUser" value=""/>

            <label>Senha</label>
            <input type="password" placeholder="Digite sua senha" id="idPass" value=""/>
            
            <button class="btn" id="btnEnviar">Enviar</button>
        </div>
</div>
</body>

</html>
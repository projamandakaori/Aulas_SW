<?php

session_start();
//Para não burlar escrevendo o nome no código. Função obrigatório abrir essa sessão

$_SESSION(['user']) = 'amanda';

echo "Página sigilo acessada!";

?>//sistemalogado
//fazer um if para ver se o status é logado do consulta.php

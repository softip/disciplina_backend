<?php

if ($_POST["nome"] == "admin" and $_POST["senha"] == 123){
    echo "Bem vindo! login realizado com sucesso";
}else{
    echo "usuário e senha inválidos";
}

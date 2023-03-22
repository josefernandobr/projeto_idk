<?php

    // senha padrao
    $SenhaPadrao = '123456';
    $EmailPadrao = 'exemplo@gmail.com';
    $hashSenhaPadrao = hash('sha512', $SenhaPadrao);

    // verificando se a senha informada pelo usuario está correta
    $email = $_POST['email'];
    $senha   = $_POST['senha'];
    $hashSenha = hash('sha512', $senha);

    if ($hashSenha == $hashSenhaPadrao & $email == $EmailPadrao) {

        header("Location: home.php");
    
    } else {

        header("Location: login.html");
    }





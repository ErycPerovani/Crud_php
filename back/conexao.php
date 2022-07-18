<?php

    $servidor = "127.0.0.1";
    $user = "root";
    $senha = "";
    $banco = "conag-banco";

    try{
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $user, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo("Problemas com conexão {$erro->getMessage()}");
        $conexao = NULL;
    }
?>
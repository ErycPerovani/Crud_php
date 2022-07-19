<?php
    session_start();

    if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
        require ("../back/conexao.php");

        $user_id = $_SESSION["online"][0];
        $adm = $_SESSION["online"][1];
    }else{
        header('location: ../index.html');
    }
    if($adm){
        require("../back/conexao.php");

        $sql = "SELECT * FROM produtos";
        $exec = $conexao->query($sql);

        while($registros = $exec->fetch()){
            echo $registros["produto"]. " - ". $registros["valor"]."<br/>";
            echo "[<a href=formularioUpdate.php?id=$registros[id]>Atualizar</a>]"."<br/>";
            echo "[<a href=delete.php?id=$registros[id]>Deletar</a>]"."<br/>";
            echo "<hr/>";
        }
    }
?>
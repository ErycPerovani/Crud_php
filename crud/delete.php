<?php
    session_start();
    
    if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
        require ("../back/conexao.php");
    
        $user_id = $_SESSION["online"][0];
        $adm = $_SESSION["online"][1];

        $id = $_GET["id"];
    
        $sql = "DELETE FROM produtos WHERE id=\"$id\"";
        $exec = $conexao->query($sql);
    
        header("home.php");
    }else{
        header('location: ./index.html');
    }
   
?>
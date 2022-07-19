<?php
    require("../back/conexao.php");
 
    $id = $_GET["id"];

    $sql = "DELETE FROM produtos WHERE id=\"$id\"";
    $exec = $conexao->query($sql);

    header("home.php");
?>
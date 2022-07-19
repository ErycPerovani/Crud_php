<?php
    require("../back/conexao.php");

    $produt = $_POST["produto"];
    $val = $_POST["valor"]; 
    $id = $_POST["id"];

    $sql = "UPDATE produtos SET produto=\"$produt\", valor=\"$val\" WHERE id=$id";
    $exec = $conexao->query($sql);
?>
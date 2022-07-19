<?php
    require("../back/conexao.php");

    $produt = $_POST["produto"];
    $val = $_POST["valor"]; 

    $sql = "INSERT INTO produtos (`produto`, `valor`) VALUES (\"$produt\", \"$val\")";
    $exec = $conexao->query($sql);
?>
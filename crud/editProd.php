<?php
    require("../back/conexao.php");

    $sql = "SELECT * FROM produtos";
    $exec = $conexao->query($sql);

    while($registros = $exec->fetch()){
        echo $registros["produto"]. " - ". $registros["valor"]."<br/>";
        echo "[<a href=formularioUpdate.php?id=$registros[id]>Atualizar</a>]"."<br/>";
        echo "[<a href=delete.php?id=$registros[id]>Deletar</a>]"."<br/>";
        echo "<hr/>";
    }
?>
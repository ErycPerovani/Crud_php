<?php
    require("../back/conexao.php");

    $sql = "SELECT * FROM produtos";
    $exec = $conexao->query($sql);

    while($registros = $exec->fetch()){
        echo $registros["produto"]. " - ". $registros["valor"]."<br/>";
        echo "<hr/>";
    }
?>
<html>
    <head></head>
    <body>
        <a href="../home.php">Voltar</a>
    </body>
</html>
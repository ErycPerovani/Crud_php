<?php
    require ("conexao.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != NULL){
        $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        echo $query->rowCount();
    }else{
        echo('ERROR!');
    }

?>

   


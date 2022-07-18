<?php
    require ("conexao.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != NULL){
        $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        if($query->rowCount()){
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            
            print_r($usuario);
        };
    }else{
        echo('ERROR!');
    }

?>

   


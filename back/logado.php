<?php
    require ("conexao.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != NULL){
        $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        if($query->rowCount()){
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0]; 

            session_start();
            $_SESSION["online"] = array($usuario['email'], $usuario['adm']);

            header('location: ../home.php');
        }else{
            header('location: ../index.html');
        }
    }else{
        echo('ERROR!');
        header('location: ../index.html');
    }

?>

   


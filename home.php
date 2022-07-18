<?php
    session_start();

    if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
        $user_id = $_SESSION["online"][0];
        $email = $_SESSION["online"][1];
    }else{
        header('location: ./index.html');
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
</head>
<body>
    <H1>OPAA</H1>
    <a href="back/logout.php">Sair</a>
</body>
</html>
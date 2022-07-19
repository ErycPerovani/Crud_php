<?php
    session_start();

    if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
        require ("back/conexao.php");

        $user_id = $_SESSION["online"][0];
        $adm = $_SESSION["online"][1];
    }else{
        header('location: ./index.html');
    }
?>
<html lang="pt-br">
    <head>
        <title>HOME</title>
    </head>
    <body>
        <?php if($adm): ?>
                <table>
                    <thead>
                        <tr>
                            <td>Email: </td>
                            <td>Nome: </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = $conexao->prepare("SELECT * FROM usuario");
                            $query->execute();

                            $user = $query->fetchAll(PDO::FETCH_ASSOC);

                        for($i=0; $i < sizeof($user); $i++):
                            $usuariosTotais = $user[$i];
                        ?>
                        <tr>
                            <td> <?php echo $usuariosTotais["email"];?> </td>
                            <td><?php echo $usuariosTotais["usuario"];?> </td>
                        </tr>
                        <?php endfor; ?>
                        <a href="crud/form.php">Cadastrar produto</a>
                    </tbody>
                </table>
            <?php endif; ?>
        <a href="back/logout.php">Sair</a>
    </body>
</html>
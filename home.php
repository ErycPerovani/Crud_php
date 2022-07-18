<?php
    session_start();

    if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
        require ("back/conexao.php");

        $user_id = $_SESSION["online"][0];
        $email = $_SESSION["online"][1];
    }else{
        header('location: ./index.html');
    }
?>

<html lang="pt-br">
    <head>
        <title>HOME</title>
    </head>
    <body>
        <?php if($user_id): ?>
                <table>
                    <thead>
                        <tr>
                            <td>Produto</td>
                            <td>Valor</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = $conexao->prepare("SELECT * FROM produtos");
                            $query->execute();

                            $prod = $query->fetchAll(PDO::FETCH_ASSOC);

                        for($i=0; $i < sizeof($prod); $i++):
                            $itensAtuais = $prod[$i];
                        ?>
                        <tr>
                            <td> <?php echo $itensAtuais["produto"];?> </td>
                            <td> R$ <?php echo $itensAtuais["valor"];?> </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        <a href="cadastramento.html">Cadastrar produto</a>
        <br/>
        <a href="back/logout.php">Sair</a>

    </body>
</html>
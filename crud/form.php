<?php
session_start();

if(isset($_SESSION["online"]) && is_array($_SESSION["online"])){
    require ("../back/conexao.php");

    $user_id = $_SESSION["online"][0];
    $adm = $_SESSION["online"][1];
}else{
    header('location: ../index.html');
}
?>
<html>
    <head>
        <title>Produtos cadastrados</title>
    </head>
    <body>
        <?php if($adm): ?>
            <h1>Cadastramento de Produtos</h1>
            <form method="post">
                <input type="text" id="prod" name="produto" placeholder="Digite o produto">
                <br/>
                <input type="text" id="valor" name="valor" placeholder="Digite o valor">
                <br/>
                <input type="button" id="bt_prod" value="Criar">
            </form>
            <div id="resposta"></div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="../js/principal.js"></script>
        <?php endif; ?>    
    </body>
</html>
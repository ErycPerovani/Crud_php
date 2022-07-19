<html>
<head>
    <title>Produtos cadastrados</title>
</head>
<body>
    <h1>Atualização de Produtos</h1>
    <form method="post">
        <?php
            require('../back/conexao.php');

            $idProduto =  $_GET['id'];
            $sql ="SELECT * FROM produtos WHERE id=$idProduto";
            $exec = $conexao->query($sql);
            $fecth = $exec->fetch();

        ?>
        <input type="text" id="prod" name="produto" value="<?php echo $fecth['produto'] ?>">
        <br/>
        <input type="text" id="valor" name="valor" value="<?php echo $fecth['valor']?>">
        <br/>
        <input type="hidden" id="id" name="id" value="<?php echo $fecth['id']?>">
        <br/>
        <input type="button" id="bt_atualizar" value="Atualizar">
    </form>
    <div id="resposta"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/principal.js"></script>

</body>
</html>
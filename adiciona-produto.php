<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");?>

    <?php


        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        

    if(insereProduto($conexao, $nome, $preco)) {
        ?>
        <p class="alert-success">Produto <?=$nome;?>, <?=$preco;?> adicionado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado <?=$msg?></p>
        <?php
    }
    ?>
<?php include("rodape.php"); ?>
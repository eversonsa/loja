<?php
require_once './cabecalho.php';
require_once './banco-categoria.php';
echo "A data de hoje " . date('d/m/y');
?>

<?php

$nome = $_POST["nome"];
if(insereCategoria($conexao, $nome)){ ?>
    <p class="text-success"> Categoria <?= $nome; ?> adicionado com sucesso! </p>
<?php }else {
         $msg = mysqli_error($conexao);   ?>
    <p class="text-danger"> Categoria <?= $nome; ?> nao foi adicionado! <?= $msg; ?> </p>
<?php } ?>
    
<?php include './rodape.php'; ?>


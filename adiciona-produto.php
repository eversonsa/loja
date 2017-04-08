<?php
require_once './cabecalho.php';
require_once './banco-produto.php';
require_once './logica-usuario.php';
echo "A data de hoje " . date('d/m/y');

verificaUsuario();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)){
    $usado = "true";
}else {
    $usado = "false";
}

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
    <p class="text-success"> Produto <?= $nome; ?>, adicionado com sucesso! </p>
<?php }else {
         $msg = mysqli_error($conexao);   ?>
    <p class="text-danger"> Produto <?= $nome; ?> nao foi adicionado! <?= $msg; ?> </p>
<?php } ?>
    
<?php include './rodape.php'; ?>

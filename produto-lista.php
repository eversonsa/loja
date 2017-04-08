<?php
require_once './cabecalho.php';
require_once './banco-produto.php';


$produtos = listaProdutos($conexao);

?>

<table class="table table-striped table-bordered">
    <tr>
        <th style="text-align: center">Nome</th>
        <th>Preco</th>
        <th>Descricao</th>
        <th>Situacao</th>
        <th>Categoria</th>
        <th>Ação</th>
    </tr>
    <tr>
        <?php foreach ($produtos as $produto) :
            $teste = $produto['usado'] == TRUE ? "USADO" : "Novo";
            ?>
        <td><?= $produto['nome'];?></td>
        <td><?= $produto['preco'];?></td>
        <td><?= substr($produto['descricao'], 0, 20);?></td>
        <td><?=$teste?></td>              
        <td><?= $produto['categoria_nome']; ?></td>
        <td><a href="produto-alterar-formulario.php?id=<?=$produto['id'];?>" class="btn btn-default">Alterar</a></td>
        <td>
            <form action="produto-remove.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id'];?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include './rodape.php'; ?>

<?php
require_once 'cabecalho.php';
require_once './banco-categoria.php';
require_once './banco-produto.php';
echo "A data de hoje " . date('d/m/y');

$id = $_GET['id'];
$produtos = buscarProduto($conexao, $id);
$categorias = listaCategoria($conexao);
$usado = $produtos['usado'] ? "checked='checked'" : "";
?>
    
<form action="alterar-produto.php"  method="POST">
    <fieldset>
        <legend><h1>Alterando produto</h1></legend>
        <input type="hidden" name="id" value="<?=$produtos['id']?>" />
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" value="<?=$produtos['nome']?>"/><br />
        
        <label for="preco">Preco:</label>
        <input type="number" name="preco" class="form-control" value="<?=$produtos['preco']?>"/><br />
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" ><?=$produtos['descricao']?></textarea><br />
        <br>
        <input type="checkbox" name="usado" class="form-control" <?=$usado?> value="true"/>usado
        <br>
        <label>Categoria</label>
        <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) : 
                
                $essaEhACategoria = $produtos['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
            ?>
            <option value="<?=$categoria['id']?>" <?=$selecao?>>
                    <?=$categoria['nome'];?>
            </option>
            <?php endforeach ?>
        </select>
        
        <button type="submit" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Alterar
        </button>
        
    </fieldset>
</form>
<?php
include 'rodape.php';


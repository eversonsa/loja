<?php
require_once 'cabecalho.php';
require_once './banco-categoria.php';
require_once './logica-usuario.php';
echo "A data de hoje " . date('d/m/y');

verificaUsuario();

$categorias = listaCategoria($conexao);

?>

<form action="adiciona-produto.php"  method="POST">
    <fieldset>
        <legend><h1>Formulario de cadastro de Produto</h1></legend>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control"/><br />
        
        <label for="preco">Preco:</label>
        <input type="number" name="preco" class="form-control"/><br />
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" ></textarea><br />
        <br>
        <input type="checkbox" name="usado" class="form-control" value="true"/>usado
        <br>
        <label>Categoria</label>
        <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) : ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nome'];?>
            </option>
            <?php endforeach ?>
        </select>
        
        <button type="submit" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Cadastrar
        </button>
        
    </fieldset>
</form>
<?php
include 'rodape.php';


<?php

require_once 'cabecalho.php';
require_once './banco-categoria.php';
echo "A data de hoje " . date('d/m/y');

?>

<form method="POST" action="adiciona-categoria.php">
    <fieldset>
        <legend><h1>Formulario de cadastro de Produto</h1></legend>        
            <label for="nome">Adicionar a Categoria:</label>
            
            <input type="text" name="nome" placeholder="Nome..."  class="form-control"/>
            <br>
            
            <button type="submit" class="btn btn-default btn-lg">
                 <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Cadastra
            </button>
    </fieldset>
</form>

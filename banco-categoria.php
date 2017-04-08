<?php
require_once './conecta.php';

function listaCategoria($conexao){
    $categorias = array();
    $query = "select * from categoria";
    $resultado = mysqli_query($conexao, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}

function insereCategoria($conexao, $nome) {
   $query = "INSERT INTO categoria(nome)VALUES('{$nome}')";
   $resultado = mysqli_query($conexao, $query);
   return $resultado;
}


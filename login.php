<?php 
      require_once './banco-usuario.php';
      require_once './logica-usuario.php';
      
$usuario = buscarUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null){
    $_SESSION["danger"] = "Usuario ou Senha invalido";
    header("Location: index.php?");
}else {
    $_SESSION["sucess"] = "Usuario Logado com sucesso";
    logaUsuario($usuario["email"]);  
    header("Location: index.php?"); 
}
die();


      



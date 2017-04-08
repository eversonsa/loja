<?php
session_start();
function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Voce nao tem acesso a essa informacao";
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
    $_SESSION["usuario_logado"] = $email;
}
function logout() {
    session_destroy();
    session_start();
}


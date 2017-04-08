<?php
require_once './logica-usuario.php';

logout();
$_SESSION["sucess"] = "Usuario Deslogado com sucesso";
header("Location: index.php");
die();

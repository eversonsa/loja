<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once './PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "eversonsa2014@gmail.com";
$mail->Password = "ev@13110";

$mail->setFrom("eversonsa2014@gmail.com", "everson Loja de php");
$mail->addAddress("eversonsa2014@gmail.com");
$mail->isHTML(true); 
$mail->Subject = "Email da loja virtual";
$mail->msgHTML("<html>de: {$nome}<br>email: {$email}<br>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()){
    $_SESSION["sucess"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
}else {
    $_SESSION["danger"] = "Mensagem nao enviada" . $mail->ErrorInfo;
    header("Location: index.php");
}


die();
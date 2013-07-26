<?php
session_start();

$valor1 = $_SESSION['n1'];
$valor2 = $_SESSION['n2'];
$soma = $_POST['captcha'];

$captcha = ($valor1 + $valor2);

// Recuperamos os valores dos campos através do método POST
$to = $_POST["to"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];
$total = (int)$soma;
if ($captcha == $total){
	$headers = "From: contato@kuab.com.br\n\t";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if(mail($to, $assunto, $mensagem, $headers)){
		echo false;
	}
	else{
		echo "Falha ao enviar, tenta novamente mais tarde.";
	}
	//die('Enviado com sucesso!');
}
?>

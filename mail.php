<?php

$nome      = $_POST['nome'];
$assunto     = $_POST['assunto'];
$email   = $_POST['email'];
$mensagem  = $_POST['mensagem'];

$data      = date("d/m/y");
$ip        = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$hora      = date("H:i");

mail("vandhuy.martins@dce.ufpb.br", $assunto, "\nNome: ".$nome."\nAssunto: ".$assunto."\nE-mail: ".$email."\n\nMensagem: \n".$mensagem."\n\n\nData: ".$data."\nIp: ".$ip."\nNavegador: ".$navegador."\nHora: ".$hora);

$site   = $email;
$titulo = "ENPEB Mail Reply";
$msg    = "Olá ".$nome.", obrigado por entrar em contato com o I Encontro
					  de Professores da Educação Básica no Vale do Mamanguape, em breve
					  entraremos em contato com você";

mail($email, $titulo, $msg);

echo "<meta http-equiv='refresh' content='0; URL= contato.html'>
		
		<script type=\"text/javascript\">
		alert(\"E-mail enviado com sucesso. Obrigado pelo contato!\");
		</script>";
?>
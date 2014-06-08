<?php 
	$email = $_POST["txtEmail"];
	$nome = $_POST["txtNome"];
	$senha = $_POST["txtSenha"];
/*
time()+60*60*24*30
+60 = um minuto
+60*60 = uma hora
+60*60*24 = um dia
+60*60*24*30 = um mês
*/

	setcookie("nome",$nome,time()+60*60*24);
	setcookie("email",$email,time()+60*60*24);
	setcookie("senha",$senha,time()+60*60*24);

	header("Location: resposta.php?id=1");

?>
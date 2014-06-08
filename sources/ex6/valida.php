<?php 
	$email = $_POST["txtEmail"];
	$senha = $_POST["txtSenha"];

	if($email==$_COOKIE["email"] && $senha==$_COOKIE['senha'])
		header("Location: resposta.php?id=2");
	else
		header("Location: resposta.php?id=3"); 
?>
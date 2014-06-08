<?php 
session_start();
$login = $_GET["login"];
$usuario = $_SESSION[$login];
if (isset($_POST["btnSubmit"])){
	setcookie("nome",$_POST["txtNome"],time()+60*60*24);
	setcookie("login",$_POST["txtLogin"],time()+60*60*24);
	setcookie("senha",$_POST["txtSenha"],time()+60*60*24);
	setcookie("nivel",$_POST["txtNivel"],time()+60*60*24);
	header("Location: index.php");
}
?>
<form action="grava-cookie.php" method="POST">
	Nome<br/> 
	<input type="text" name="txtNome" value="<?php echo $usuario[0] ?>" readonly/><br/>

	Login<br/> 
	<input type="text" name="txtLogin" value="<?php echo $usuario[1] ?>" readonly/><br/>
	
	Senha<br/> 
	<input type="text" name="txtSenha" value="<?php echo $usuario[2] ?>" readonly/><br/>
	
	Nivel<br/> 
	<input type="text" name="txtNivel" value="<?php echo $usuario[3] ?>" readonly/><br/>

	<br/><input type="submit" name="btnSubmit" value="Gravar Cookie"/>
</form>
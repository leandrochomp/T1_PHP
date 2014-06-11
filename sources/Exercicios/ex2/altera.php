<?php
session_start();
require_once("Conexao.class.php");

if(isset($_POST["alterar"])){
	$titulo = $_POST["titulo"];
    $interprete = $_POST["interprete"];
    $ano = $_POST["ano"];
    $id = $_POST["id"];
	$sql = "UPDATE cds SET titel= '$titulo', interpret='$interprete', jahr='$ano' WHERE id='$id'"; 
	try{
		Conexao::executar($sql);
		$_SESSION["status"] = "Registro alterado com sucesso!";
        header("LOCATION: index.php");
	} catch(Exception $e) {
		$_SESSION["status"] = $sql . "<br>" . $e->getMessage();
		header("LOCATION: index.php");
	}
}

?>
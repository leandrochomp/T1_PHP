<?php
session_start();
require_once("Conexao.class.php");

if(isset($_POST["confirmar"])){
	$id = $_POST["id"];
	$sql = "DELETE FROM `cds` WHERE id = '$id'";
	try{
		Conexao::executar($sql);
		$_SESSION["status"] = "Registro apagado com sucesso!";
		echo '<script>window.location.href = "http://lnascimento.url.ph/sources/Exercicios/ex2/index.php"</script>';
        // header("LOCATION: index.php");
	} catch(Exception $e) {
		$_SESSION["status"] = $sql . "<br>" . $e->getMessage();
		// header("LOCATION: index.php");
		// echo '<script>window.location.href = "http://lhenrique-projetos.eti.br/exercicios/exe-2/index.php"</script>';

	}
}

?>

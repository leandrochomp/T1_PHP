<?php
session_start();
require_once("Conexao.class.php");
if(isset($_POST["inserir"])){
    try{
        $titulo = $_POST["titulo"];
        $interprete = $_POST["interprete"];
        $ano = $_POST["ano"];
        $sql = "INSERT INTO cds (titel, interpret, jahr) VALUES ('$titulo', '$interprete', '$ano')";
        Conexao::executar($sql);
        $_SESSION["status"] = "Parabens registro inserido com sucesso";
    }catch(Exception $e){
        $_SESSION["status"] = $e->getMessage();
    }
    header("LOCATION: index.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Coleção de CDs - Inserir novo CD</title>
</head>

<body>
<h1>Coleção de CDs</h1>
<h2>Inserir novo CD</h2>
<form action="insere-cd.php" method="post" name="insere-cd" id="insere-cd">
  <label>Título: <br>
  <input type="text" name="titulo" id="titulo">
  </label>
  <p>
    <label>Intérprete:
    <br>
    <input type="text" name="interprete" id="interprete">
    </label>
  </p>
  <p>
    <label>Ano:
    <br>
    <input type="text" name="ano" id="ano">
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="inserir" id="inserir" value="Inserir CD">
    </label>
  </p>
</form>
</body>

</html>

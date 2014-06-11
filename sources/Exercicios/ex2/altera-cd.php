<?php
session_start();
require_once("Conexao.class.php");
require_once("altera.php");
	    try{
        $registro = Conexao::executar("SELECT * FROM cds WHERE id=" . $_GET["cd"]);
        $cd = mysql_fetch_object($registro);
        $_SESSION["status"] = " ";
    } catch(Exception $e){
        $_SESSION["status"] = $sql . "<br>" . $e->getMessage();
        header("LOCATION: index.php");
        }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Coleção de CDs - Alterar CD</title>
</head>

<body>
<h1>Coleção de CDs</h1>
<h2>Altera CD</h2>
<form action="altera.php" method="post" name="altera" id="altera">
  <label>Título: <br>
  <input type="text" name="titulo" id="titulo" value="<?php print($cd->titel); ?>">
  </label>
  <p>
    <label>Intérprete:
    <br>
    <input type="text" name="interprete" id="interprete" value="<?php print($cd->interpret); ?>">
    </label>
  </p>
  <p>
    <label>Ano:
    <br>
    <input type="text" name="ano" id="ano" value="<?php print($cd->jahr); ?>">
    </label>
    <input type="hidden" name="id" id="id" value="<?php print($cd->id); ?>">
  </p>
  <p>
    <label>
    <input type="submit" name="alterar" id="alterar" value="Alterar">
    </label>
  </p>
</form>
</body>

</html>

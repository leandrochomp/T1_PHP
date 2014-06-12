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
        
include('../menu.php');

?>
<div class="container">
<h2>Altera CD</h2>

<form method="POST" action="altera.php" class="form-horizontal" role="form">
    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Título:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php print($cd->titel); ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Intérprete:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="interprete" name="interprete" value="<?php print($cd->interpret); ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Ano:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="ano" name="ano" value="<?php print($cd->jahr); ?>">
        <input type="hidden" name="id" id="id" value="<?php print($cd->id); ?>">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-default" id="alterar" name="alterar">Alterar</button>
      </div>
    </div>
  </form>

  <div>
      <?php include('../lista.php'); ?>
    </div>
</div>

<?php
include('../menu.php');
session_start();
require_once("Conexao.class.php");
require_once("apaga.php");
	    try{
        $registro = Conexao::executar("SELECT * FROM cds WHERE id=" . $_GET["cd"]);
        $cd = mysql_fetch_object($registro);
        $_SESSION["status"] = " ";
    } catch(Exception $e){
        $_SESSION["status"] = $sql . "<br>" . $e->getMessage();
        header("LOCATION: index.php");
        }


?>
<div class="container">
    <h2>Apagar CD</h2>
    <form action="apaga.php" method="post" name="apaga" id="apaga">
      <p>Deseja realmente apagar o registro <strong>&quot;<?php print($cd->titel); ?>&quot;</strong> do intérprete <strong>&quot;<?php print($cd->interpret); ?>&quot;</strong> ? </p>
      <p>
        <input type="hidden" name="id" id="id" value="<?php print($cd->id); ?>">
        <label>
        <input type="button" class="btn btn-default" onClick="history.back();" name="cancelar" id="cancelar" value="Cancelar">
        </label>
        <label>
        <input type="submit" class="btn btn-default" name="confirmar" id="confirmar" value="Confirmar">
        </label>
      </p>
    </form>
      <div>
          <?php include('../lista.php'); ?>
        </div>
</div>

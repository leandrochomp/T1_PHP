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

include('../menu.php');
?>

<div class="container">
  <h2>Inserir novo CD</h2>
  <form action="insere-cd.php" method="post" name="insere-cd" id="insere-cd" class="form-horizontal" role="form">
    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Título:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="titulo" name="titulo">
      </div>
    </div>

    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Intérprete:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="interprete" name="interprete">
      </div>
    </div>

    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label">Ano:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="ano" name="ano">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-default" id="inserir" name="inserir">Inserir CD</button>
      </div>
    </div>
  </form>

  <div> 
    <?php include('../lista.php'); ?>
  </div>
</div>

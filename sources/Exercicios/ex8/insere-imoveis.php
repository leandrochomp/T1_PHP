<?php 
	include('../menu.php');
	require("Imoveis.class.php");
	if(isset($_GET["salvar"])){
		$obj = new Imovel($_GET["txtReferencia"],$_GET["txtTipo"],$_GET["txtQuarto"],$_GET["txtBairro"],$_GET["txtValor"] . "\n" );
		$obj->salva("imoveis.csv");
		echo '<script>window.location.href = "http://lnascimento.url.ph/sources/Exercicios/ex8/gerencia-imoveis.php";</script>';
	}
?>
<div class="container">

	<form method="GET" action="insere-imoveis.php" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Referência:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="txtReferencia" name="txtReferencia" required='required'>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Tipo:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="txtTipo" name="txtTipo" required='required'>
	    </div>
	  </div>
	
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Quartos:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="txtQuarto" name="txtQuarto" required='required'>
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Bairro:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="txtBairro" name="txtBairro" required='required'>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Valor:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="txtValor" name="txtValor" required='required'>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-12">
	      <button type="submit" class="btn btn-default" name="salvar">Salvar</button>
	    </div>
	  </div>
	</form>
</div>
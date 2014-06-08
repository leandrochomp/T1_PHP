<?php 
	require("Imoveis.class.php");
	if(isset($_GET["salvar"])){
		$obj = new Imovel($_GET["referencia"],$_GET["tipo"],$_GET["quartos"],$_GET["bairro"],$_GET["valor"]);
		$obj->salva("imoveis.csv");
		header("Location: gerencia-imoveis.php");
	}
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../app/css/bootstrap.css" rel="stylesheet">
	<link href="../app/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../app/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

	<form method="GET" action="insere-imoveis.php" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Referencia:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="referencia" name="txtReferencia">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Tipo:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="referencia" name="txtTipo">
	    </div>
	  </div>
	
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Quartos:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="referencia" name="txtQuarto">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Bairro:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="referencia" name="txtBairro">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Valor:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="referencia" name="txtValor">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-12">
	      <button type="submit" class="btn btn-default" name="salvar">Salvar</button>
	    </div>
	  </div>
	</form>
</div>
</body>
</html>

<script src="../app/js/jquery-1.11.0.js "></script>
<script src="../app/js/bootstrap.js"></script>
<script src="../app/js/app.js"></script>
<?php 
	include('../index.php');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../app/css/bootstrap.css" rel="stylesheet">
<link href="../app/css/bootstrap-theme.css" rel="stylesheet">
<link href="../app/css/font-awesome.min.css" rel="stylesheet">
<link href="../app/css/style.css" rel="stylesheet">

<div class="container">

	<form method="POST" action="fibonacci-resultado.php" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Insira um valor:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="valor" name="valor">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-12">
	      <button type="submit" class="btn btn-default" name="calcular">Calcular</button>
	    </div>
	  </div>
	</form>
</div>
<script src="../app/js/jquery-1.11.0.js "></script>
<script src="../app/js/bootstrap.js"></script>
<script src="../app/js/app.js"></script>
<?php 
	include('../includes/include-css.php'); 
	include('../includes/include-footer.php');
?> 
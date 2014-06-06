<?php 
	include('index.php');
 ?>
<div class="container">

	<form method="POST" action="MDC.php" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Primeiro Número:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="num1" name="num1">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Segundo Número:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="num2" name="num2"/>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-12">
	      <button type="submit" class="btn btn-default">Calcular</button>
	    </div>
	  </div>
	</form>
</div>
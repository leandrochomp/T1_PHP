<?php 
	include('../menu.php');
?>
<div class="container">

<p> Voce está no <strong> Exercício 05 - MDC</strong> </p>
	<br>
	<span> Tem a finalidade de realizar um calculo matematico, através do algoritmo de Euclides, mais conhecido como MDC.</span>
	<p></p>

	<form method="POST" action="mdc-calculo.php" class="form-horizontal" role="form">
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
	      <button type="submit" class="btn btn-default" name="calcular">Calcular</button>
	    </div>
	  </div>
	</form>
<?php 
	include('../lista.php');
 ?>
</div>
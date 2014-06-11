<?php 
	include('../menu.php');
?>

<div class="container">
	<p> Voce está no <strong> Exercício 05 - FIBONACCI</strong> </p>
	<br>
	<span> Tem a finalidade de realizar um "mini-game" onde o usuário tenta acertar algum número na sequência de Fibonacci.</span>
	<p> <span> Vamos jogar?</span> </p>

	<form method="POST" action="fibonacci-resultado.php" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="Nome" class="col-sm-2 control-label">Insira um valor:</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="valorFib" name="valorFib">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-12">
	      <button type="submit" class="btn btn-default" name="calcular">Calcular</button>
	    </div>
	  </div>
	</form>

	<div>
    	<?php include('../lista.php'); ?>
    </div>
</div>
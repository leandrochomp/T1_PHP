<?php 
	include('../menu.php');
?>
<div class="container">

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
	  <div>
    <a href="#"> Exercicio 1</a>
    <a href="#"> Exercicio 2</a>
    <a href="#"> Exercicio 3</a>
    <a href="ex8/gerencia-imoveis.php"> Exercicio 4</a>
    <ul> Exercicio 5 
      <li> <a href="ex5/mdc-form.php"> MDC </a> </li>
      <li> <a href="ex5/fibonacci-form.php"> Fibonacci </a> </li>
    </ul>
    <a href="ex6/index.php">Exercicio 6, </a> 
    <a href="ex7/index.php"> Exercicio 7,</a>
    <a href="ex8/gerencia-imoveis.php"> Exercicio 8</a>
  </div>
</div>
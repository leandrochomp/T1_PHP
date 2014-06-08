<?php 
	if (isset($_COOKIE["nome"]))
		header("Location: login.php");

  include('../menu.php');
?>


<div class="container">
<p> Você está no Exercicio 6, ele aborda o tema X </p>
	<form action="registro.php" method="POST" class="form-horizontal" role="form">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-3">
	      <input type="email" name="txtEmail" class="form-control" placeholder="Email" title="digite o email" required="required">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Nome</label>
	    <div class="col-sm-3">
	      <input type="text" name="txtNome" class="form-control" placeholder="Nome" title="digite o nome" required="required">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
	    <div class="col-sm-3">
	      <input type="password" class="form-control" name="txtSenha" placeholder="Senha" title="digite a senha" required="required">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" name="btnSubmit" class="btn btn-default">Cadastrar</button>
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
    <a href="ex7/index.php"> Exercicio 7,</a>
    <a href="ex8/gerencia-imoveis.php"> Exercicio 8</a>
  </div>
</div>
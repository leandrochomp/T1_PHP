<?php 
	if (isset($_COOKIE["nome"]))
		header("Location: login.php");

  include('../menu.php');
?>


<div class="container">
	<p> Voce está no <strong> Exercício 06 </strong> </p>
	<br>
	<span> Aborda um login simples através de cookie.</span>
	<p> <span> Insira seu: Email, login e senha.</span> </p>
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
	<?php 
		include('../lista.php'); 
	?>
	</div>
</div>
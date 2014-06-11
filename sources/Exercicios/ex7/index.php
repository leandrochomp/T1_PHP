<?php

include('../menu.php');
if(isset($_COOKIE["loginJogador"]) && isset($_COOKIE["senhaJogador"])){
	if(isset($_POST["submit"])){
		if ($_POST["txtLogin2"] == $_COOKIE["loginJogador"] && 
			$_POST["txtSenha2"] == $_COOKIE["senhaJogador"])
			echo "Ola,".$_COOKIE['nome']. ", seu logon foi efetuado com sucesso.<br/>";
		else
			echo "Dados de login ou senha invalidos.<br/>";
	}
}
else
	header("Location: apresenta-dados.php");

?>

<div class="container">
	<form action="index.php" method="POST" class="form-horizontal" role="form">	  
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Login</label>
	    <div class="col-sm-3">
	      <input type="text" name="txtLogin2" class="form-control" placeholder="Nome" title="digite o nome" required="required">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
	    <div class="col-sm-3">
	      <input type="password" class="form-control" name="txtSenha2" placeholder="Senha" title="digite a senha" required="required">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" name="submit" class="btn btn-default">Cadastrar</button>
	    </div>
	  </div>
	</form>
	<?php 
		include('../lista.php'); 
	?>
	</div>
</div>

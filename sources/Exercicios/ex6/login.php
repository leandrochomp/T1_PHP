<?php 
  include('../menu.php');
 ?>

<div class="container">
	<p> Voce está no <strong> Exercicio 06 </strong> </p>
	<br>
	<span> Agora que voce ja realizou o cadastro, insira os mesmos dados cadastrados na tela anterior.</span>
	<p></p>
	<form action="valida.php" method="POST" class="form-horizontal" role="form">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-3">
		      <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
		    <div class="col-sm-3">
		      <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Password" required="required">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name="btnSubmit" class="btn btn-default">Entrar</button>
		    </div>
		  </div>
	</form>
  <?php 
    include('../lista.php'); 
  ?>
  </div>
</div>
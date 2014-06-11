<?php 
  require('../menu.php');
 ?>

<div class="container">
<?php 
	switch($_GET["id"]){
		case 1:
			echo "Seus dados foram armazenados com sucesso e o navegador ja pode ser fechado";
			break;
		case 2:
			echo "Ola " . $_COOKIE['nome'];
			break;
		case 3:
			echo "Senha e/ou Login incorretos. <br/><a href='login.php'>Retornar</a>";
			break;
		default:
			echo "sabe de nada inocente!";
	}
  require('../lista.php');
?>	
</div>


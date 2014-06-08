<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../app/css/bootstrap.css" rel="stylesheet">
	<link href="../app/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../app/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/css/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">T1_Leandro Nascimento</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Início</a></li>
        <li><a href="formacao.php">Formação</a></li>
        <li><a href="experiencia.php">Experiência</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portifólio<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="05.php">Exercicio 01</a></li>
            <li><a href="05.php">Exercicio 02</a></li>
            <li><a href="05.php">Exercicio 03</a></li>
            <li><a href="ex4/mostraPDF.php">Exercicio 04</a></li>
            <li><a href="#">Exercicio 05</a></li>
            <li class="divider"></li>
            <li><a href="ex5/mdc-form.php">MDC</a></li>
            <li><a href="ex5/fibonacci-form.php">Fibonacci</a></li>
            <li class="divider"></li>
            <li><a href="#">Exercicio 06</a></li>
            <li class="divider"></li>
            <li><a href="ex6/index.php">Cadastrar</a></li>
            <li><a href="ex6/login.php">Acessar</a></li>
            <li class="divider"></li>
            <li><a href="05.php">Exercicio 07</a></li>
            <li><a href="05.php">Exercicio 08</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
?>	
</div>

<script src="../app/js/jquery-1.11.0.js "></script>
<script src="../app/js/bootstrap.js"></script>
<script src="../app/js/app.js"></script>
<?php 
	include('../includes/include-css.php'); 
	include('../includes/include-footer.php');
?> 


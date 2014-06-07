<!doctype html>
<html lang="pt-BR">
<head>
<?php  
  include('includes/include-css.php');
?>
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
        <li class="active"><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Formação</a></li>
        <li><a href="#">Experiência</a></li>
        <li><a href="ex5/mdc-form.php">TESTE</a></li>
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
            <li><a href="05.php">Exercicio 06</a></li>
            <li><a href="05.php">Exercicio 07</a></li>
            <li><a href="05.php">Exercicio 08</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php  
      include('includes/include-js.php');
    ?>
</body>
<?php include('includes/include-footer.php'); ?>
</html>
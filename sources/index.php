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
  <div>
    <p>Bem vindo ao meu portifólio, meu nome é Leandro Nascimento. 
    <p> Atualmente estou no ultimo semestre no curso de Análise e Desenvolvimento de Sistemas na <a href="http://www.unimonte.br/capa/">UNIMONTE</a>.</p>
      Fiz diversos cursos de programação, e quero sempre aprender mais, para saber mais sobre minha carreira acesse a aba Experiencia.
    </p>
    
  </div>
  <div> 
    <h1>Contatos </h1>
  </div>

  <div>
    <a href="http://www.linkedin.com/pub/leandro-nascimento/32/bab/558"> <img src="app/img/linkedin.png"></a>
    <a href="https://twitter.com/chomp_"> <img src="app/img/twitter.png"></a>
    <a href="https://www.facebook.com/leandro.nascimento.9480"> <img src="app/img/facebook.png"></a>
  </div>
  <br>
  <br>
  <div>
    <p> Para maiores informações sobre projetos realizados ou em andamento acesse meu Github.</p>
    <a href="https://github.com/leandrochomp"> <img src="app/img/github.png"></a>
  </div>

</div>
    <?php  
      include('includes/include-js.php');
      include('includes/include-footer.php');
    ?>
</body>
</html>
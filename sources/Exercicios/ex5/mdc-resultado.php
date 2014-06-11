<?php 
	session_start();
?>
<?php 
	include('../menu.php');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../app/css/bootstrap.css" rel="stylesheet">
<link href="../app/css/bootstrap-theme.css" rel="stylesheet">
<link href="../app/css/font-awesome.min.css" rel="stylesheet">
<link href="../app/css/style.css" rel="stylesheet">
<div class="container">

	<h3>O MDC ENTRE <?php echo $_SESSION['vlr1'] . ' e ' . $_SESSION['vlr2'] . ' É: ' . $_SESSION['resultado'];?></h3>
	<strong><a href="mdc-form.php">Voltar</a></strong>

</div>
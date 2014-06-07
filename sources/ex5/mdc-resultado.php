<?php 
	session_start();
?>
<?php 
	include('../index.php');
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
<script src="../app/js/jquery-1.11.0.js "></script>
<script src="../app/js/bootstrap.js"></script>
<script src="../app/js/app.js"></script>
<?php 
	include('../includes/include-css.php'); 
	include('../includes/include-footer.php');
?> 
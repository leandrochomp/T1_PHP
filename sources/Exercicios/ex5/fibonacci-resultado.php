<?php
include('../menu.php');

if(isset($_POST["calcular"]))
	$limite  = $_POST["valor"];
else
	header('Location: fibonacci-form.php');

$anterior = 1;
$posterior = 0;
$sequencia = 0;
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../app/css/bootstrap.css" rel="stylesheet">
	<link href="../app/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../app/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/css/style.css" rel="stylesheet">
</head>

<div class="container">

	<?php
		while($sequencia <= $limite)
		{
			echo $sequencia.'<br />';
			$sequencia = $anterior + $posterior;
			$anterior = $posterior;
			$posterior = $sequencia;
		}

		echo '<hr>';

		if($limite == $anterior)
			echo 'Você acertou o valor da sequência';
		else
			echo 'Você não acertou nenhum numero da sequência';
	?>
</div>
<script src="../app/js/jquery-1.11.0.js "></script>
<script src="../app/js/bootstrap.js"></script>
<script src="../app/js/app.js"></script>
<?php 
	include('../includes/include-css.php'); 
	include('../includes/include-footer.php');
?> 
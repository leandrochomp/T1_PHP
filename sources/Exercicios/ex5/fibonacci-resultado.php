<?php
include('../menu.php');

if(isset($_POST["calcular"]))
	$limite  = $_POST["valorFib"];
else
	header('Location: fibonacci-form.php');

$anterior = 1;
$posterior = 0;
$sequencia = 0;
?>

<div class="container">

	<?php
		print_r('A sequência de Fibonacci é: ');
		while($sequencia <= $limite)
		{
			echo '<strong>'.$sequencia.', </strong>';
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
<div>
    	<?php include('../lista.php'); ?>
    </div>
</div>

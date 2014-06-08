<?php 
session_start();
$caminhoArquivo = "recebidos\\usuarios.csv";
if (!file_exists($caminhoArquivo))
	header("Location: envia-arquivo.php");
?>
<table border="1">
	<?php 
	$usuarios = file($caminhoArquivo);
	
	foreach ($usuarios as $indice => $valores) {
		$valores = explode(";",$valores);
		if ($indice == 0){
			echo "<thead>";
			echo "<th>$valores[0]</th>";
			echo "<th>$valores[1]</th>";
			echo "<th>$valores[2]</th>";
			echo "<th>$valores[3]</th>";
			echo "</th>";
			continue;
		}
		echo "<tr>";
		echo "<td>$valores[0]</td>";
		echo "<td><a href='grava-cookie.php?login=$valores[1]'>$valores[1]</a></td>";
		echo "<td>$valores[2]</td>";
		echo "<td>$valores[3]</td>";
		echo "</tr>";
		$_SESSION["$valores[1]"] = $valores;
	}
	?>
</table>
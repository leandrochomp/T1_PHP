<?php 
	require("Imoveis.class.php");
	Imovel::carregaLista("imoveis.csv");
?>
<table border="1">
	<thead>
		<th>Referencia</th>
		<th>Tipo</th>
		<th>Quartos</th>
		<th>Bairro</th>
		<th>Valor</th>
	</thead>
	<?php 
	foreach (Imovel::$lista as $imovel) {
		echo "<tr>";
		echo "<td>$imovel->referencia</td>";
		echo "<td>$imovel->tipo</td>";
		echo "<td>$imovel->quartos</td>";
		echo "<td>$imovel->bairro</td>";
		echo "<td>$imovel->valor</td>";
		echo "</tr>";
	}
	?>
	<tr>
		<td colspan="5" style="text-align: center;">
		<a href="importa-imoveis.php">Importar</a> - 
		<a href="insere-imoveis.php">Inserir</a> - 
		<a href="exporta-imoveis.php">Exportar</a></td>
	</tr>
</table>
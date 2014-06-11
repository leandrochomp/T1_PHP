<?php 
	include('../menu.php');
	require("Imoveis.class.php");
	Imovel::carregaLista("imoveis.csv");
?>
<div class="container">
	<table class="table table-hover" border="1">
	<p> Voce está no <strong> Exercicio 08 </strong> </p>
	<br>
	<span> Aborda um sistema (OO)Orientado a Objetos que permite inserir dados,incluir e exportar uma planilha no formato .csv e visualização do conteudo.</span>
	<p></p>
		<thead>
			<th>Referência</th>
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
	<?php  
		include('../lista.php');
	?>
</div>
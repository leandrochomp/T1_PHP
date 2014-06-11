<?php
require_once "db.php";

$select = new Zend_Db_Select($db);
$select->from('livro');

$registros = $db->fetchAll($select->assemble());

?>
<div class="container">
	<table class="table">
		<tr>
			<th>C�digo</th>
			<th>T�tulo</th>
			<th>Editora</th>
			<th>Ano</th>
			<th>Autor</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		<?php foreach($registros as $registro){ ?>
			<tr>
				<?php foreach($registro as $campo){ ?>
					<td><?php echo $campo; ?></td>
				<?php } ?>
				<td>
					<a href="editar.php?codigo=<?php echo $registro['codigo'];?>">Editar</a>
				</td>
				<td>
					<a href="excluir.php?codigo=<?php echo $registro['codigo'];?>">Excluir</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
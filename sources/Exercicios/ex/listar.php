<?php
require_once "db.php";

$select = new Zend_Db_Select($db);
$select->from('exeone');

$registros = $db->fetchAll($select->assemble());

?>
<div class="container">
	<table class="table" border="1">
		<tr>
			<th>Código</th>
			<th>Título</th>
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
					<a href="editar.php?codigo=<?php echo $registro['codigo'];?>">E</a>
				</td>
				<td>
					<a href="excluir.php?codigo=<?php echo $registro['codigo'];?>">X</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
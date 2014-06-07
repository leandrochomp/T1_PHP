<?php
//02-db.php arquivo onde fica dados da conexao
require_once '02-db.php';

$turmas = new Turmas();

$registros=$turmas->fetchAll();
?>

<table border="1">
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
	<?php foreach($registros as $registro){ ?>
		<tr>
			<?php foreach($registro as $campo){ ?>
				<td><?php echo $campo; ?></td>
			<?php } ?>
			<td>
				<a href="05-editar.php?codigo=<?php echo $registro['codigo'];?>">Edit</a>
			</td>
			<td>
				<a href="08-excluir.php?codigo=<?php echo $registro['codigo'];?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php
require_once "db.php";

$select = new Zend_Db_Select($db);
$select->from('livro');

$registros = $db->fetchAll($select->assemble());

?>
<div class="container">
	<table class="table">
		<tr>
			<th>C&oacutedigo</th>
			<th>T&iacutetulo</th>
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
<div>
	<div class="espaco"></div>
	<p> Para acessar as respostas clique <a href="../../app/pdf/Exercicio3_Respondido.pdf">aqui</a></p>
</div>
</div>
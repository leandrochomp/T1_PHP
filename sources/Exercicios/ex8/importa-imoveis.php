<?php
if(isset($_POST["importar"])){
	move_uploaded_file($_FILES["arquivo"]["tmp_name"] , "".$_FILES["arquivo"]["name"]);
	header("Location: gerencia-imoveis.php");
}
?>

<form action="importa-imoveis.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"/>
	<input type="submit" name="importar" value="Importar"/>
</form>
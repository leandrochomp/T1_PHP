<?php 
if(isset($_POST["importar"])){
	move_uploaded_file($_FILES["arquivo"]["tmp_name"] , "recebidos\\".$_FILES["arquivo"]["name"]);
	header("Location: apresenta-dados.php");
}
?>

<form action="envia-arquivo.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"/>
	<input type="submit" name="importar" value="Importar"/>
</form>
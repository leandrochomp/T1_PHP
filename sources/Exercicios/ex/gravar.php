<?php

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$autor = $_POST['autor'];

require_once 'db.php';

$bind = array('titulo'=>$titulo,'editora'=>$editora,'ano'=>$ano,'autor'=>$autor);
if(empty($codigo))
	$db->insert('exeone',$bind);
else{
	$where = $db->quoteInto('codigo = ?',$codigo);
	$db->update('exeone',$bind,$where);
}
header('Location: index.php');
?>
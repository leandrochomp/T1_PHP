<?php
$codigo = $_GET['codigo'];
require_once 'db.php';
$where = $db->quoteInto('codigo = ?',$codigo);
$db->delete('livro',$where);
header('Location: index.php');
?>
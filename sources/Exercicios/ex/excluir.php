<?php
$codigo = $_GET['codigo'];
require_once 'db.php';
$where = $db->quoteInto('codigo = ?',$codigo);
$db->delete('exeone',$where);
header('Location: index.php');
?>
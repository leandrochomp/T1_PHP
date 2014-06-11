<?php
require_once 'autoload.php';

$config = new Zend_Config_Ini('config.ini','database');
$db = Zend_Db::factory($config->adapter,$config->params);

?>
<?php
//inclui O FRAMEWORK para todas paginas
set_include_path(get_include_path() . PATH_SEPARATOR . realpath('../../framework/library/') );	

require_once('Zend/Loader/Autoloader.php');
Zend_Loader_AutoLoader::getInstance();

spl_autoload_register('__autoload');
function __autoload($class){
	require_once $class. '.php';
}

?>
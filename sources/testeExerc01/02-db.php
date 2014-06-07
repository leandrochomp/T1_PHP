<?php
//auto load é o arquivo que faz a conexao com a pasta do framework!
require_once('03-autoload.php');

//parametro 1 arquivos de configuração de acesso ao banco 04-config.ini;
//parametro 2 a seção do arquivo 'database' local onde tem as configurações do banco;

//crio uma nova instacia do Zend_config_ini -
$config = new Zend_config_ini('04-config.ini','database');
// arquivo
//factory - cria o objeto Zend_db -> cria a conexao
//adapter -> define qual banco de dados vai ser usado (MySQL, Oracle)
$db = Zend_Db::factory($config->adapter, $config->params);

//Classe abstrata
Zend_Db_Table_Abstract::setDefaultAdapter($db);
?>
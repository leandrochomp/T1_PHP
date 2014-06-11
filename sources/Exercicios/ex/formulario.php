<?php
require_once 'db.php';
$codigo = isset($_GET['codigo'])?$_GET['codigo']:null;
$titulo = null;
$editora = null;
$ano = null;
$autor = null;
if(!empty($codigo)){
	$select = new Zend_Db_Select($db);
	$select->from('exeone');
	$where = $db->quoteInto('codigo = ?',$codigo);
	$select->where($where);
	$registro = $db->fetchRow($select->assemble());
	$titulo = $registro['titulo'];
	$editora = $registro['editora'];
	$ano = $registro['ano'];
	$autor = $registro['autor'];

}
$view = new Zend_View();

$form = new Zend_Form();
$form->setView($view);
$form->setAction('gravar.php');

$element = new Zend_Form_Element_Text('codigo');
$element->setLabel('Codigo');
$element->setValue($codigo);
$element->setAttrib('readonly','readonly');
$form->addElement($element);

$element = new Zend_Form_Element_Text('titulo');
$element->setLabel('Titulo');
$element->setValue($titulo);
$form->addElement($element);

$element = new Zend_Form_Element_Text('editora');
$element->setLabel('Editora');
$element->setValue($editora);
$form->addElement($element);

$element = new Zend_Form_Element_Text('ano');
$element->setLabel('Ano');
$element->setValue($ano);
$form->addElement($element);

$element = new Zend_Form_Element_Text('autor');
$element->setLabel('Autor');
$element->setValue($titulo);
$form->addElement($element);


$element = new Zend_Form_Element_Submit('gravar');
$form->addElement($element);

?>
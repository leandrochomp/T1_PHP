<?php
	require_once('02-db.php');
	$codigo = isset($_GET['codigo']) ? $_GET['codigo']: null;
	$nome = null;

	if(!empty($codigo)){
		//$select = new Zend_Db_Select($db);
		//$select->from('turmas');
		//previne SQL injection
		//$where = $db->quoteInto('codigo = ?',$codigo);
		//$select->where($where);
		//$registro = $db->fetchRow($select->assemble());
		$turmas = new turmas();
		$registro = $turmas->find($codigo)->current();
		$nome = $registro->nome;
		//$nome = $registro['nome'];
	}
	$view = new Zend_View();
	$form = new Zend_Form();
	$form->setView($view);

	$form->setAction('07-gravar.php');
	$element = new Zend_Form_Element_Text('codigo');
	$element->setLabel('Codigo');
	$element->setValue($codigo);

	$element->setAttrib('readonly','readonly');

	$form->addElement($element);

	$element = new Zend_Form_Element_Text('nome');
	$element->setLabel('Nome');
	$element->setValue($nome);
	$form->addElement($element);

	$element = new Zend_Form_Element_Submit('Gravar');
	$form->addElement($element);


?>
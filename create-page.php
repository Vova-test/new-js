<?php
	require(dirname(__FILE__) . "/vendor/autoload.php");

	use TagClasses\Div; 
	use TagClasses\Select;
	$page = [];
	
	$div = new Div();
	$select = new Select();

	$select->addOption('value', 'label');
	$select->addOption('value2', 'label2');
	$select->addOption('value3', 'label3');

	$div->addContent('My test select and add content');
	$div->put($select);
	$div->setId('div-15');
	$div->setName('div-15');
	$div->addClass('uk-card');
	$div->addClass('uk-card-default');
	$div->addClass('uk-card-hover');

	$page[] = $div;
	echo json_encode($page);
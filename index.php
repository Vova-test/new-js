<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("ROOT_PATH", dirname(__FILE__));

require_once(ROOT_PATH . "/vendor/autoload.php");

use TagClasses\Div; 
use TagClasses\Select;

if (!empty($_GET)) {
	$page = [];

	$div = new Div();
	$select = new Select();

	$select->addOption('value', 'label');
	$select->addOption('value2', 'label2');
	$select->addOption('value3', 'label3');

	$div->put($select);
	$div->setId('div-15');
	$div->setName('div-15');
	$div->addClass('uk-card');
	$div->addClass('uk-card-default');
	$div->addClass('uk-card-hover');
	//uk-card uk-card-default uk-card-hover

	$page[] = $div;
	echo json_encode($page);
	return;
}

require_once(ROOT_PATH."/js_page.php");

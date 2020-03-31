<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("ROOT_PATH", dirname(__FILE__));

require_once(ROOT_PATH . "/vendor/autoload.php");

if (!empty($_POST)) {
	/*use TagClasses\Div; 
	use TagClasses\Select;

	$page = [];

	$div = new Div();
	$select = new Select();

	$select->addOption('value', 'label');
	$select->addOption('value2', 'label2');
	$select->addOption('value3', 'label3');

	$div->put($select);

	$page[] = $div;
	echo json_encode($page);*/
	echo 5;
}
//echo json_encode($page);
require_once(ROOT_PATH."/js_page.php");

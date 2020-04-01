<?php
if (!empty($_POST)) {
	echo json_encode([5, 6]);
	return;
} else {
	echo json_encode([1, 2]);
	return;
}
//echo json_encode([5, 6]);
//echo json_encode($page);
//require_once(ROOT_PATH."/js_page.php");

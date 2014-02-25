<?php
	require_once "libs/Smarty.class.php";
	require_once "classes/Input.php";
	
	$smarty = new Smarty();
	$input = new Input();
	
	
	$smarty->display("index.tpl");
	
	
	
	
?>
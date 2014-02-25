<?php
	require_once "classes/Graf.php";
	$graphics = new Graf();
	
	if(isset($_GET['graf'])){
		$graf = $_GET['graf'];
		
		switch($graf){
			case 1:
				$graphics->fullGraf("pic");
				break;
				
			case 2:
				$graphics->dopolnenieGrafa();
				break;
				
			case 3:
				$n = $_GET['pg'];
				$graphics->getSpecificGraf($n, "pic");
				break;
			
			default:
				break;
		}
	}
?>
<?php
	require_once "libs/Smarty.class.php";
	require_once "classes/Input.php";
	require_once "classes/Core.php";
	require_once "classes/Graf.php";
	
	$smarty = new Smarty();
	$input = new Input();
	$core = new Core();	
	$graf = new Graf();
	
	if(isset($_POST['fio'])){
		$fio = $input->input();		
		$fio_vector = $core->strToNumb(mb_strtolower($fio));
		$matrix = $core->martixY($fio_vector);
		$matrixA = $core->martixA($matrix);
		// Генерируем все 21 картинки
		$html = $graf->getAllGrafs();
		//

		// Делим графы на классы
		$core->getIzomorf();
		//
							
		$smarty->assign("fio", $fio_vector);
		$smarty->assign("y", $matrix);
		$smarty->assign("a", $matrixA);
		$smarty->assign("allHtmlGrafs", $html);
		$smarty->display("core.tpl");
		
				
	}
	
	
?>
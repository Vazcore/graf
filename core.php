<?php
	require_once "libs/Smarty.class.php";
	require_once "classes/Input.php";
	require_once "classes/Core.php";
	require_once "classes/Graf.php";
	require_once "classes/Independent.php";
	
	
	$smarty = new Smarty();
	$input = new Input();
	$core = new Core();	
	$graf = new Graf();
	$independent = new Independent();
	
	if(isset($_GET['fio'])){
		
		$fio = $input->input();		
		$fio_vector = $core->strToNumb(mb_strtolower($fio));
		$menu = $core->genMenu(Input::MENU, $fio);
		
		$smarty->assign("menu", $menu);
		$smarty->assign("fio_word", $fio);
		$smarty->assign("url", Input::URL);
		
		if(!isset($_GET['part'])){
			$matrix = $core->martixY($fio_vector);
			$matrixA = $core->martixA($matrix);
			// Генерируем все 21 картинки
			$html = $graf->getAllGrafs();
			//			
								
			$smarty->assign("fio", $fio_vector);		
			$smarty->assign("y", $matrix);
			$smarty->assign("a", $matrixA);
			$smarty->assign("allHtmlGrafs", $html);
			$smarty->display("core.tpl");
		}else{
			$part = $_GET['part'];
			switch ($part) {
				case 2:
					// Izomorfnost' part
					
					// Делим графы на классы
					$res_groups = $core->getIzomorf();		
					//End
					
					$smarty->assign("iz_grafs", $res_groups);				
					$smarty->display("izomorf.tpl");
					break;
					
				case 3:
					// Незавимимые множества
					$razmer = $graf->razmer;
					$independent->independentM($graf->fullGraf("map"), $razmer);					
					$smarty->display("independentM.tpl");
					break;
				
				default:
					
					break;
			}
		}		
		
		
				
	}
	
	
?>
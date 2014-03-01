<?php
/*
 * Найти все минимальные и наименьшие доминирующие множества, определить число доминирования
 */
 	require_once "Core.php";
	require_once "Klika.php";
 	
	class Dominant {
		private $core;
		private $klika;
				
		public function __construct(){
			$this->core = new Core();
			$this->klika = new Klika();
		}
		
		function action($map, $razmer){
			$result = array();
			$min = 20000;			
			$min_pos = 0;
			$min_it = 0;
			$allVariants = $this->core->polnyiPerebor($this->klika->numberToArray($razmer));
			foreach ($allVariants as $key => $value) {
				foreach ($value as $key2 => $value2) {
					if(stripos($value2, ",")){
						$elems = explode(",", $value2);
						if($this->findDominant($elems, $map, $razmer)){
							$result[] = $elems;
							$count = count($elems);
							if($count < $min){
								$min = $count;
								$min_pos = $min_it;
							}
							$min_it++;
						}
					}
				}
			}
			$result[$min_pos][] = "<font color='blue'>-MIN</font>";
			$result[] = "<div class='hideBlock'>".$min."</div>";
			return $result;
		}
		
		function findDominant($elems, $map, $r){
			$status = false;
			$result = array();
			$adding = array();
			$sravnenie = $elems;
			foreach ($this->klika->numberToArray($r) as $key => $value) {
				if(!in_array($value, $sravnenie)){
					$adding[] = $value;
					$sravnenie[] = $value;
					
					// Sravnenie
					foreach ($elems as $key2 => $value2) {
						foreach ($map as $key3 => $value3) {
							foreach ($value3 as $key4 => $value4) {
								if($key3 < $key4){
									if(($key3 == $value2 AND $key4 == $value) OR ($key3 == $value AND $key4 == $value2)){
										if($value4 == 1){
											$status = true;	
										}																														
									}									
								}
							}
						}
					}
					if(!$status){
						return false;
					}
				}
			}
			if($status){
				return true;
			}			
		}
	}
?>
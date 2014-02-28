<?php
	/**
	 * Класс клика графа
	 * Найти все максимальные и наибольшие клики данного графа. Определить плотность графа G.
	 */
	 require_once "Klika.php";
	 require_once "Core.php";
	 require_once "Graf.php";
	 
	class Klika {
		
		public $klikas = array();
		public $core;
		public $graf;
		
		public function __construct(){
			$this->core = new Core();
			$this->graf = new Graf();
		}
		
		function numberToArray($number){
			$array = array();
			for ($i=0; $i < $number; $i++) { 
				$array[$i] = ($i+1);
			}
			return $array;
		}
		
		function getKlika($razmer, $map){
			$allVariants = $this->core->polnyiPerebor($this->numberToArray($razmer));
			$result = array();
			$max = 0;
			$max_pos = 0;
			//print_r($allVariants[4]);			
			for ($i=1; $i < 5; $i++) { 
				foreach ($allVariants[$i] as $key => $value) {
					if($req = $this->getSmezhnost($map, $value, $razmer)){
						$count = count($els = explode(",", $req));
						if($count > $max){
							$max = $count;							
						}
						$result[] = $req;
						$max_pos++;	
					}	
				}
			}
			$result[$max_pos-1] = "<font color='blue'>".$result[$max_pos-1]."-MAX</font>";
			$result[] = $max;
			return $result;
		}
		
		function getSmezhnost($map, $variant, $razmer){
			$result = array();			
			$status = true;
			$count = count($variant);
			$points = explode(",", $variant);
			foreach ($points as $key => $point1) {
				foreach ($points as $key0 => $point2) {
					foreach ($map as $key1 => $value1) {
						foreach ($value1 as $key2 => $value2) {
							if($key1 < $key2){
								if(($key1 == ($point1-1) AND $key2 ==($point2-1)) OR ($key1 == ($point2-1) AND $key2 == ($point1-1))){
									if($value2 == 1){										
										$result[$count][$variant][$point1.",".$point2] = "yes";
										continue;	
									}else{
										$status = false;
										break;
									}
								}
							}
						}
					}
				}
			}
			if($status){
				return $variant;
			}else{
				return false;
			}
			/* Выводить несмежные варианты - нет необходимости
			 * else{
				echo $variant." - NO!!!<br>";
			}
			 * 
			 */ 							
		}
				
		function run($i,$j){
			if($i < $j){
				// Продолжу ...
			}
		}			
				
	}
	 
?>
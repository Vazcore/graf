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
		
		function getKlika($razmer, $map){
			$klika_obj = new Klika();
			
			$this->core->progonIshGraf($this->core->martixA($this->graf->razmer, "return"), $this);
			
			
			$klikas = array();
			$element_to_delete = array();
			
			for ($i=0; $i < $razmer; $i++) {
				$klikas[$i][] = $i;	 
				foreach ($map as $val) {
					$rebro = explode("-", $val);
					if($rebro[0] == $i){
						$klikas[$i][] = $rebro[1];
					}
					if($rebro[1] == $i){
						$klikas[$i][] = $rebro[0];
					}
				}
			}
			// Smezhnost po tochke
			$it = 1;			
			foreach($klikas as $val){
				//echo "<h1>".$it."</h1>";
				$all_ps = array();				
				foreach($val as $item){
					$points = array();
					// Получаем массивы, которые содержат yes - если точка смежна всем точка в клике
					// и no с массивом не соответствия смежности точек
					$response = $this->getSmezhnost($map, $val, $item);	
					//echo "<b>".$item."</b>";				
					if($response[0] == "no"){
						foreach($response[1] as $ps){
							$p = explode("-", $ps);
							$all_ps[] = $p[0];
							$all_ps[] = $p[1];
						}
					}					
				}
				// Считаем кол-во совпадений смежных
				$count_array = array();
				$count_array = array_fill(0, $razmer, 0);
				$count_znachimyh = 0;
				
				for ($i=0; $i < $razmer; $i++) { 
					foreach($all_ps as $val){
						if($i == $val){
							$count_array[$i]++;
						}						
					}
					if($count_array[$i] == 0){
						$count_array[$i] = NULL;
					}else{
						$count_znachimyh++;
					}					
				}			
				// print_r
				$it++;
			}
			// End Smezhnost po tochke
			//print_r($klikas);
		}
		
		function getSmezhnost($map, $array, $point){
			$res = array();
			$res[] = "no";
			$global_status = true;			
			foreach($array as $val){
				if($point != $val){
					$local_status = true;
					foreach($map as $item){
						if(($point."-".$val == $item) OR ($val."-".$point == $item)){							
							$local_status = false;	
							$global_status = false;
							break;						
						}					
					}
					if($local_status){
						$res[1][] = $point."-".$val;	
					}
					
				}
			}
			if(count($res) == 1){
				$res[0] = "yes";
			}
			return $res;			
		}
				
		function run($i,$j){
			if($i < $j){
				// Продолжу ...
			}
		}			
				
	}
	 
?>
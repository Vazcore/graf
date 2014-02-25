<?php
	class Core{
		function strToNumb($string)
		{
		    $converter = array(
		        'а' => '1-',   'б' => '2-',   'в' => '3-',
		        'г' => '4-',   'д' => '5-',   'е' => '6-',
		        'ё' => '7-',   'ж' => '8-',  'з' => '9-',
		        'и' => '10-',   'й' => '11-',   'к' => '12-',
		        'л' => '13-',   'м' => '14-',   'н' => '15-',
		        'о' => '16-',   'п' => '17-',   'р' => '18-',
		        'с' => '19-',   'т' => '20-',   'у' => '21-',
		        'ф' => '22-',   'х' => '23-',   'ц' => '24-',
		        'ч' => '25-',  'ш' => '26-',  'щ' => '27-',
		        'ь' => "28-",  'ы' => '29-',   'ъ' => "30-",
		        'э' => '31-',   'ю' => '32-',  'я' => '33-', 
		       
		    );
		    return $this->identicFio(strtr($string, $converter));
		}
		
				
		function identicFio($fio){
			$fio_array = explode("-", $fio);
			$fio_vector = array($fio_array[0]);
			foreach($fio_array as $val){
				if(!in_array($val, $fio_vector, true)){
					$fio_vector[] = $val;
					if(count($fio_vector)==7){
						break;
					}
				}
			}
			return $fio_vector;
		}
		
		
		function martixY($numb){			
			$y = array();
			
			for($i = 0; $i < count($numb); $i++){
				for($j = 0; $j < count($numb); $j++){
					$y[$i][$j] = abs($numb[$i]-$numb[$j]);
				}
			}
			return $y;
		}
		
		function martixA($val) {
			$a = array();
			for($i = 0; $i < count($val); $i++){
			 	for($j = 0; $j < count($val); $j++){
				 	if($val[$i][$j] == 0){
						$a[$i][$j] = 0;
					}else{
						if(($val[$i][$j]%3) == 0 OR ($val[$i][$j]%2) == 0){
							$a[$i][$j] = 1;
						}else{
							$a[$i][$j] = 0;
						}	
					}	
				 }
			 }
			 
			 $fp = fopen ("matrix.txt", "w");
			 
			foreach ($a as $val)
			{
				foreach($val as $i){
					fwrite($fp, $i."-");	
				}			
			}
			 
			fclose($fp);			
			
			return $a;
		}
		
		function generateSochetaniya($n){
			/*$full = array();
			$sochetaniya = array();
			$ishodnoe = array();
			for($i = 0; $i < $n; $i++){
				$full[] = $i+1;
			}
			for($i = 0; $i < $n-2; $i++){				
				$ishodnoe[] = $full[$i];
			}
			$it = 1;
			
	
	    	for($i = $n-3; $i >=0; $i--){
	    		$status = true;
				$sochetaniya[$it] = $ishodnoe;
				while($status){
					if($sochetaniya[$it][$i] < $ishodnoe[$i+1]){
						$it++;
						$sochetaniya[$it] = $ishodnoe;
						$sochetaniya[$it][$i]++;						
					}else{
						$status = false;
					}
				}				
				
			}
			
			return $sochetaniya;
			*/
			$sochetaniya = array();
			$sochetaniya[] = array("1","2","3","4","5");
			$sochetaniya[] = array("1","2","3","4","6");
			$sochetaniya[] = array("1","2","3","4","7");
			$sochetaniya[] = array("1","2","3","5","6");
			$sochetaniya[] = array("1","2","3","5","7");
			$sochetaniya[] = array("1","2","3","6","7");
			$sochetaniya[] = array("1","2","4","5","6");
			$sochetaniya[] = array("1","2","4","5","7");
			$sochetaniya[] = array("1","2","4","6","7");
			$sochetaniya[] = array("1","2","5","6","7");
			$sochetaniya[] = array("1","3","4","5","6");
			$sochetaniya[] = array("1","3","4","5","7");
			$sochetaniya[] = array("1","3","4","6","7");
			$sochetaniya[] = array("1","3","5","6","7");
			$sochetaniya[] = array("1","4","5","6","7");
			$sochetaniya[] = array("2","3","4","5","6");
			$sochetaniya[] = array("2","3","4","5","7");
			$sochetaniya[] = array("2","3","4","6","7");
			$sochetaniya[] = array("2","3","5","6","7");
			$sochetaniya[] = array("2","4","5","6","7");
			$sochetaniya[] = array("3","4","5","6","7");
			
			return $sochetaniya;
		}

		function compareGrafsinClass($gr1, $gr2){
			$graf = new Graf();
			$gr1_info = $graf->getSpecificGraf($gr1, "none");
			$gr2_info = $graf->getSpecificGraf($gr2, "none");
			print_r($gr1_info);
			print_r($gr2_info);
		}

		function getIzomorf() {			
			$graf = new Graf();
			$typeOfGraf = array();
			$classesGraf = array();
			
			
			for ($i=0; $i < $graf->razmer; $i++) { 
				$specific_graf = $graf->getSpecificGraf($i, "none");	
				$tek_razmer = $specific_graf[count($specific_graf)-1][2];
				$typeOfGraf[$tek_razmer][] = $i;							
			}

			foreach ($typeOfGraf as $val) {
				if(count($val) > 1){
					$classesGraf[] = $val;
				}
			}
			/*
			foreach($classesGraf as $classGraf){
				for ($i=0; $i < count($classGraf); $i++) { 
					if($this->compareGrafsinClass($classGraf[$i], $classGraf[$i+1])){

					}
				}
			}
			*/
			$this->compareGrafsinClass($classesGraf[0][0], $classesGraf[0][1]);			
			

		}
	}
?>
<?php
	require_once "Input.php";
	
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
		
		function genMenu($list, $fio){
			$list = explode(",", $list);
			$spisok = array();
			$spisok[] = '<li><a href="'.Input::URL.'core.php?fio='.$fio.'">Генерация данных и графов</a></li>';
			$it = 2;		
			foreach($list as $item){
				$spisok[] = '<li><a href="'.Input::URL.'core.php?fio='.$fio.'&part='.$it.'">'.$item.'</a></li>';
				$it++;		
			}
			return $spisok;
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
			$size = count($this->generateSochetaniya($gr1)); // Razmernost' sochetaniy tochek
			$gr1_info = $graf->getSpecificGraf($gr1, "map"); // Sochetaniya tochek
			$gr2_info = $graf->getSpecificGraf($gr2, "map"); // Sochetaniya tochek
			
			$gr1_smezh = array(); // Kol-vo stepenei smezhnosti v grafe1
			$gr2_smezh = array(); // Kol-vo stepenei smezhnosti v grafe2
			
			// Vektor tekushego sochetaniya tochek
			$p1 = array();
			$p2 = array();
			// End Vektor tekushego sochetaniya tochek
			
			// Obnulenie
			for ($i=0; $i < $size+2; $i++) {
				$gr1_smezh[$i] = 0;
				$gr2_smezh[$i] = 0;
			}
			// End Obnulenie
			
			for ($i=0; $i < $size+2; $i++) { 
				for ($j=0; $j < count($gr1_info); $j++) { 
					$p1 = explode("-", $gr1_info[$j]);
					$p2 = explode("-", $gr2_info[$j]);
					if(in_array("".$i, $p1, true)){
						$gr1_smezh[$i]++; 
					}
					if(in_array("".$i, $p2, true)){
						$gr2_smezh[$i]++;
					}
				}
			}
			// Sorturuem po ubyvaniyu dlya sravneniya
			rsort($gr1_smezh);
			rsort($gr2_smezh);
			
			if($gr1_smezh == $gr2_smezh){
				return true;
			}else{
				return false;
			}
			
		}

		function getIzomorf() {			
			$graf = new Graf();
			$typeOfGraf = array();
			$classesGraf = array();
			$povtoreniiya = array(); // Massiv uzhe izomorfnyh grafov
			$result_types = array(); // Dvoinoi massiv resultata izomorfnosti grafov
			$result_groups = array();// Resultat izomofnosti			
			
			
			for ($i=0; $i < ($graf->razmer*($graf->razmer-1))/2; $i++) { 
				$specific_graf = $graf->getSpecificGraf($i, "none");	
				$tek_razmer = $specific_graf[count($specific_graf)-1][2];
				$typeOfGraf[$tek_razmer][] = $i;
			}

			foreach ($typeOfGraf as $val) {
				if(count($val) > 1){
					$classesGraf[] = $val;
				}
			}
			// Poisk izomorfnosti
			foreach($classesGraf as $classGraf){
				for ($i=0; $i < count($classGraf); $i++) { 
					for ($j=($i+1); $j < count($classGraf); $j++) {
						if(!in_array($classGraf[$j], $povtoreniiya)){ 
							if($this->compareGrafsinClass($classGraf[$i], $classGraf[$j])){
								//Formiruem izomorfnye gruppy
								$result_types[$classGraf[$i]][] = $classGraf[$j];
								$povtoreniiya[] = $classGraf[$j];
							}
						}
					}
				}
			}
			// End poisk
			$it = 0;
			foreach ($result_types as $key => $val) {				
				$result_groups[$it][] = $key;
				foreach($val as $v){
					$result_groups[$it][] = $v;
				}				
				$it++;
			}
			
			return $result_groups;	
			
		}
	}
?>
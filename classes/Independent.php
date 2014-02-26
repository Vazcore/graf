<?php
	class Independent {
		
		public $max_el;
		
		function independentM($map, $razmer){
			$indep = array();			
			
			for ($i=0; $i < $razmer; $i++) {
				$smezh = array();
				$smezh[] = $i;
				$indep[$i][] = $i;  
				foreach($map as $val){
					$rebro = explode("-", $val);
					if(($rebro[0] == $i) AND (!in_array("".$rebro[1], $smezh, true))){
						$smezh[] = $rebro[1]; 
						//$smezh = $this->dopSmezhnost($smezh, $map, $rebro[1]);
					}
					if(($rebro[1] == $i) AND (!in_array("".$rebro[0], $smezh, true))){
						$smezh[] = $rebro[0];
						//$smezh = $this->dopSmezhnost($smezh, $map, $rebro[0]); 
					}					
					//print_r($indep);
				}
				foreach($map as $item){
					$rebro = explode("-", $item);
					if($rebro[0] != $i AND $rebro[1] != $i){
						if(!in_array("".$rebro[0], $smezh, true)){
							$indep[$i][] = $rebro[0];
							$smezh[] = $rebro[0];
							$smezh = $this->dopSmezhnost($smezh, $map, $rebro[0]); 
						}
						if(!in_array("".$rebro[1], $smezh, true)){
							$indep[$i][] = $rebro[1];
							$smezh[] = $rebro[1]; 
							$smezh = $this->dopSmezhnost($smezh, $map, $rebro[1]);
						}
					}
				}
				//print_r($smezh);
				unset($smezh);
			}
			
			$ind_res = array();
			
			foreach($indep as $val){
				sort($val);
				//print_r($val);
				if(!in_array($val, $ind_res, true)){
					$ind_res[] = $val;
				}				
			}
			
			// Posik max nezav-e Mn-vo vershin
			$ind_show = array();
			$ind_show = array_fill(0, count($ind_res), NULL);
			$el = 0;
			$max_count = 0;
			$max_el = 0;
			
			foreach($ind_res as $val){
				$ind_show[$el] = $ind_show[$el]."{";
				$tek_count = 0;				
				foreach($val as $item){
					$ind_show[$el] = $ind_show[$el].",".($item+1);
					$tek_count++; 	
				}
				if($tek_count >= $max_count){
					$max_count = $tek_count; 
					$max_el = $el;
				}
				$ind_show[$el] = $ind_show[$el]."};";
				$el++; 
			}
			$ind_show = array_unique($ind_show);
			$ind_show[$max_el] = $ind_show[$max_el]."-MAX";
			$this->max_el = $max_el;
			
			// END Posik max nezav-e Mn-vo vershin
			return $ind_show;
		}

		function chislo_nezav($array, $max){
			$count = 0;
			$res = explode(",", $array[$max]);
			$count = count($res) - 1;
			return $count;
		}
				
		
		function dopSmezhnost($smezh, $map, $search){
			foreach($map as $val){
				$rebro = explode("-", $val);
				if(($rebro[0] == $search) AND (!in_array("".$rebro[1], $smezh, true))){
					$smezh[] = $rebro[1];
				}
				if(($rebro[1] == $search) AND (!in_array("".$rebro[0], $smezh, true))){
					$smezh[] = $rebro[0];
				}
			}
			return $smezh;
		}
	}
?>
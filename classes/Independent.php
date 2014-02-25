<?php
	class Independent {
		
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
			print_r($ind_res);
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
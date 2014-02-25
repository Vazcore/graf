<?php

	require_once "Core.php";
	
	class Graf {
		public $razmer = 7;
		public $points = array();		
		public $graf_info;
		
		function getPoints(){
			$this->points[] = array("100","50","1");
			$this->points[] = array("200","50","2");
			$this->points[] = array("250","100","3");
			$this->points[] = array("250","150","4");
			$this->points[] = array("200","180","5");
			$this->points[] = array("100","180","6");
			$this->points[] = array("50","120","7");
			return $this->points;
			
		}
		
		
		function grafBuilder($map){
			$p = array();						
			$p = $this->getPoints();
			$unique_p = array();
			$unique_p[] = -1;
			
			$im = ImageCreate (300, 200)  
           		 or die ("Ошибка при создании изображения");          
		    $couleur_fond = ImageColorAllocate ($im, 210, 210, 210);  
		    $color_line = ImageColorAllocate ($im, 0, 0, 0);
		    $color_numb = imagecolorallocate($im, 220,10,130);  		   
		    
			foreach($map as $val){
				list($p1, $p2) = explode("-", $val);
				
				imageline($im,$p[$p1][0],$p[$p1][1],$p[$p2][0],$p[$p2][1],$color_line);
				if(!in_array($p1, $unique_p, true)){
					$unique_p[] = $p1;
					imagestring($im, 5, $p[$p1][0], $p[$p1][1], $p[$p1][2], $color_numb);
				}elseif(!in_array($p2, $unique_p, true)){
					$unique_p[] = $p2;
					imagestring($im, 5, $p[$p2][0], $p[$p2][1], $p[$p2][2], $color_numb);
				}			
				
			}
			
			ImagePng ($im);  		
			imagedestroy($im);
		}
		
		function fullGraf($type){
			$a = $this->readMatrix();
			$connections = array();
			$k = 0;
			// Ищу единицы
				for($i = 0; $i < $this->razmer; $i++){
					for($j = 0; $j < $this->razmer; $j++){
						if($i < $j){
							if($a[$i][$j] == 1){
								$connections[] = $i."-".$j;				
							}
						}
					}
				}
			//
			if($type == "pic"){
				$this->grafBuilder($connections);
			}elseif($type == "map"){
				return $connections;
			}
			
		}
		
		function dopolnenieGrafa() {
			$a = $this->readMatrix();
			$connections = array();
			for($i = 0; $i < $this->razmer; $i++){
				for($j = 0; $j < $this->razmer; $j++){
					if($i < $j){
						if($a[$i][$j] == 0){
							$connections[] = $i."-".$j;					
						}
					}
				}
			}
			$this->grafBuilder($connections);
		}
		
		function readMatrix(){
			$m = array();
			$prev = array();
			$content = "";
			$fp = fopen ("matrix.txt", "rb");			 
			while (!feof($fp)) {
			  $content .= fread($fp, 8192);
			}
			fclose($fp);
			$prev = explode("-", $content);
			$k = 0;
			for($i = 0; $i < 7; $i++){				
				for($j = 0; $j < 7; $j++){
					$m[$i][$j] = $prev[$k];
					$k++;
				}
			}
			
		    return $m;
			
		}
		
		function getAllGrafs() {
			$html = "";
			for($i = 0; $i < 21; $i++){
				$html = $html."<div class='grafs-task5'><p>Граф ".($i+1)."-й</p><img src='graf.php?graf=3&pg=".$i."' /></div>";
			}
			return $html;
		}
		
		function getSpecificGraf($n, $type) {
			$core = new Core();
			$soch = $core->generateSochetaniya(3);
			$connections = array();
			$count_rebro = 0;
			$graf_info = array();
			$specific_map = array();

			
			$ps = $soch[$n];
			$m = $this->readMatrix();
			
			for($i = 0; $i < $this->razmer; $i++){
				for($j = 0; $j < $this->razmer; $j++){
					if($i < $j){
						if($m[$i][$j] == 1){
							if((in_array("".($i+1),$ps,true)) AND (in_array("".($j+1),$ps,true))){
								$connections[] = $i."-".$j;
								$count_rebro++;			
								$graf_info[]= array($i,$j,$count_rebro);
								$specific_map[] = $i."-".$j;
							}
						}
					}					
				}
			}
			
			if($type == "pic"){			
				$this->grafBuilder($connections);
			}elseif($type == "none"){				
				return $graf_info;
			}elseif($type == "map"){
				return $specific_map;
			}
		}


			
	}
?>
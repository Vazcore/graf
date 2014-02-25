<?php
	class Input {
		public $fio;
		
		const URL = "/graf/";
		const MENU = "Изоморфность,Независимое множество,Клики,Доминирующие множества,Двудольный граф и звезда";
		
		function input(){
			if(isset($_GET['fio'])){
				$this->fio = trim($_GET['fio']);
				return $this->fio;
			}
		}
	}
?>
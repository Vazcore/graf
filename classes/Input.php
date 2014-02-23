<?php
	class Input {
		public $fio;
		
		function input(){
			if(isset($_POST['fio'])){
				$this->fio = trim($_POST['fio']);
				return $this->fio;
			}
		}
	}
?>
<?php

Class Formulaire {


		private $method;

		function __construct($name,$method='post'){
			$this->method = $this->verifMethod($method);
			$this->name = $name;
		}

		private function verifMethod($method){
			switch ($method) {
				case 'get':
				case 'Get':
				case 'GET':
					return 'get';
					break;
					default:
						return 'post';
			}
		}

		public function debut($action){
			echo '<form method="'.$this->method.'" action="'.$action.'" name="'.$this->name.'">';
		}
		public function inputText($name , $value=null){
			if ($value) {
				echo '<input style="text-align:center" type="text" name="'.$name.'" value="'.$value.'">';
			}else{
				echo '<input style="text-align:center" type="text" name="'.$name.'" placeholder="votre '.$name.'">';
			}
			
		}
		
	}
?>	
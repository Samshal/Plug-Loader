<?php
	namespace Example\Faz;
	
	class Faz {
		private function __construct(){ }

		public static function alert($message){
			echo $message;
		}
	}
?>
<?php
	namespace Example\Foo;
	
	class Foo {
		public function __construct(){

		}

		public function getMessage(){
			$messages = [
						 "Check out my WhatsBulk Chat API!", 
						 "Did you know facebook owns Whatsapp?", 
						 "Did you know PHP is a programming language?",
						 "Do you know Quora exists?"
						];

			$rand = array_rand($messages);
			return $messages[$rand];
		}

		public static function log($message){
			\Example\Faz\Faz::alert($message);
		}
	}
?>
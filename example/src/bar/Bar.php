<?php
	namespace Example\Bar;

	use Example\Foo\Foo as Foo;
	use Example\Faz\Faz as Faz;
	
	class Bar {
		function __construct(){
			$fooInstance = new Foo();
			Faz::alert($fooInstance->getMessage());
		}
	}
?>
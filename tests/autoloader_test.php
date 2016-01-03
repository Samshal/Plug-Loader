<?php
namespace Plug\Autoloader;

class AutoloaderTest extends \PHPUnit_Framework_TestCase
{
	public function testFileCanBeFound() {
		$autoloader = new Autoloader();
		$found = $autoloader->requireFile("autoload.json");

		$this->assertTrue($found);
  	}
}
?>
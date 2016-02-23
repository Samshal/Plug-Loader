<?php
	require "../vendor/autoload.php";

	/**
	 * This example uses plug-loader to autoload the bar and foo classes.
	 * Listed below is a dependency list for the bar, foo and faz class located within the /src directory
	 *
	 * Bar depends on Foo and Faz
	 * Foo depends on Faz
	 *
	 * The autoloader automatically finds this classes and autoloads them, without you having to specify that
	 * in autoload.json (see for yourself);
	 */
	new Example\Bar\Bar();
	
	echo "<br/><br/>";


	Example\Foo\Foo::log("Emergency! A Fire just started at 2,3,4 Avenue! A baby is trapped.");
?>
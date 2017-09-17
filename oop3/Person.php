<?php 

class Person {
	
	static $counter = 1;
	
	public function __construct(){
		echo self::$counter++;
		echo "<br>";
	}

	
}

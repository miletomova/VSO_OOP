<?php 

class RedCar {

	static public $color = 'red';

	public function get_color(){
		echo static::$color;
	}
}
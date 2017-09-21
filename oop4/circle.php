<?php 

class Circle implements iAreas {
	public $radius;

	public function __construct($r){
		$this->radius = $r;
	}

	public function get_area(){
		return $this->radius*pow(2, 3.14);
	}
}
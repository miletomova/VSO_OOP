<?php 

class Cylinder extends Circle implements iAreas {
	public $height;

	public function __construct($r, $h){
		parent::__construct($r);
		$this->height = $h;
	}

	public function get_area(){
		return $this->radius*pow(2, 3.14)*$this->height;
	}
}
<?php 

class Rectangle implements iAreas {
	public $width;
	public $height;

	public function __construct($a, $b){
		$this->width 	= $a;
		$this->height 	= $b;
	}

	public function get_area(){
		return $this->height*$this->width;
	}



}
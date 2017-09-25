<?php 

class Cylinder extends Circle implements iAreas, iVolume {
	public $height;
	public $base;

	public function __construct($r, $h){
		parent::__construct($r);
		$this->height = $h;
		$this->base = parent::get_area();
	}

	public function get_area(){
		// $base = parent::get_area();
		return $this->base + ($this->height*$this->radius);
	}

	public function get_volume(){
		// $base = parent::get_area();
		return $this->base*$this->height;
	}
}
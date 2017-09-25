<?php 

class Parallelepiped extends Rectangle implements iAreas, iVolume{

	public $cube_height;

	public function __construct($a, $b, $h){
		parent::__construct($a, $b);

		$this->cube_height = $h;
	}

	public function get_area(){
		$base = parent::get_area();
		return $base*2+(2*($this->width*$this->cube_height)+2*($this->height*$this->cube_height));
	}

	public function get_volume(){

		$base = parent::get_area();

		return $base*$this->cube_height;
	}

}
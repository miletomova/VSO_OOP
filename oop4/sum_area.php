<?php 

class Sum_area {
	
	public $shapes 		= array();
	public $all_areas	= 0;

	public function add_shape($shape){
		$this->shapes[] = $shape;	
	}

	public function sum_areas(){
		foreach($this->shapes as $shape){
			$all_areas+=$shape->get_area();
		}

		return $all_areas;

	}
}
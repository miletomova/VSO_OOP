<?php 

class Sum_area {
	
	static public $shapes 		= array();
	static public $all_areas	= 0;

	static public function add_shape($shape){
		self::$shapes[] = $shape;	
	}

	static public function sum_areas(){
		foreach(self::$shapes as $shape){
			self::$all_areas+=$shape->get_area();
		}

		return self::$all_areas;

	}
}
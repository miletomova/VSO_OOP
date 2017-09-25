<?php 

class SumAV {
	
	static public $shapes 		= array();
	static public $all_areas	= 0;
	static public $all_volumes	= 0;

	static public function add_shape($shape){
		self::$shapes[] = $shape;	
	}

	static public function sum_areas(){
		foreach(self::$shapes as $shape){
			self::$all_areas+=$shape->get_area();
		}

		return self::$all_areas;

	}

	static public function sum_volumes(){
		foreach(self::$shapes as $shape){
			if(method_exists($shape, 'get_volume')){
			self::$all_volumes+=$shape->get_volume();
			}
		}

		return self::$all_volumes;

	}
}
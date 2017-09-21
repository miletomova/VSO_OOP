<?php 

include 'areas.php';
include 'circle.php';
include 'cylinder.php';
include 'rectangle.php';
include 'sum_area.php';


$circle 	= new Circle(3);
$rectangle 	= new Rectangle(2, 5);
$cylinder 	= new Cylinder(2, 5);

Sum_area::add_shape($circle);
Sum_area::add_shape($rectangle);
Sum_area::add_shape($cylinder);

//var_dump(Sum_area::$shapes);

echo Sum_area::sum_areas();
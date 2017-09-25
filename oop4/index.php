<?php 

include 'areas.php';
include 'volume.php';
include 'circle.php';
include 'cylinder.php';
include 'rectangle.php';
include 'parallelepiped.php';
include 'sumAV.php';





$circle 	= new Circle(3);
$rectangle 	= new Rectangle(2, 5);
$cylinder 	= new Cylinder(2, 5);
$parallelepiped	= new Parallelepiped(2, 5, 10);

SumAV::add_shape($circle);
SumAV::add_shape($rectangle);
SumAV::add_shape($cylinder);
SumAV::add_shape($parallelepiped);

var_dump(SumAV::$shapes);

echo SumAV::sum_areas();
echo '<p></p>';
echo SumAV::sum_volumes();
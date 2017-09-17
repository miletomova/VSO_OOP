<?php 

include 'Cofee.php';
include 'Person.php';

$bartender 	= new Person('Bartender', 21);
$client 	= new Person('Client', 22);
$cofee 		= new Cofee($client, 'Cofee Shop');

$cofee->hire_bartender($bartender);



echo '<pre>';
var_dump($cofee);
echo '</pre>';

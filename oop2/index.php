<?php 

include 'Page.php';
include 'HomePage.php';
include 'Person.php';
include 'PropertyTest.php';



// $home_page = new HomePage('Read about ...');
// //echo $home_page->page_name;

// $home_page->get_pagename();

// $page = new Page('Test Page');
// echo $page->page_name;

// $home_page = new HomePage('Read');
// $home_page->get_pagename();


// $page->set_name('property', 'some value');
// var_dump($page);

// $man = new Person();

// $man->set_age('age');

// var_dump($man);


$test = new PropertyTest();
//$test->data = 1;
echo $test->data;
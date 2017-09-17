<?php 

class Cofee {
	public $name;
	public $bartender = array();
	public $client;

	public function __construct(Person $cl, $n){
		// $this->bartender[] 	= $bt;
		$this->client 		= $cl;
		$this->name 		= $n;
	}

	public function hire_bartender(Person $bt){
		$this->bartender[] = $bt;
	}
}
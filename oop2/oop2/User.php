<?php 

class User {

	public $count;
	public $username;
	public $password;
	public $role;

	public function __construct($param, $u, $p, $r){
		$this->count = $param;
		$this->count++;		
	}

	public function view_count(){
		return $this->count;
	}

}
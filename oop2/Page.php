<?php 

class Page {
	// public $header;
	// protected $page_name;
	private $page_name;


	public function __construct($pn){
		$this->page_name = $pn;
	}

	public function get_pagename(){
		echo $this->page_name;
	}
	public function view_header($header){
		
		echo $header;
		echo "<p></p>";
		$this->print_header();
	}

	public function print_header(){
		$this->header = 'INDEX HEADER';
		echo $this->header;
	}
}
<?php 

class Page {
	public $header;

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
<?php 

class Page {
	public $header;
	public $content;
	public $footer = 'Page Contact Footer';

	public function view_info(){
		echo "Hello World!";
	}

	public function print_param($param){
		echo $param;
	}

	public function view_footer(){

		echo $this->footer;

	}

	public function view_header($header){

		$this->header = $header;
		echo $this->header;
		echo '<p></p>';
		$this->view_info();

	}
}
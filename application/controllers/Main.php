<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index(){

		$this->load->view("header");
		$this->load->view("main/index");
		$this->load->view("footer");
	}

	public function contact(){

		$this->load->view("header");
		$this->load->view("main/contact");
		$this->load->view("footer");
	}

	public function about(){

		$this->load->view("header");
		$this->load->view("main/about");
		$this->load->view("footer");
	}
	public function gallery(){	
		
		$dir = FCPATH .'/images/gallery';
		$images = array_filter(scandir($dir),function($img){

		
			return preg_match('/\.jpg/i',$img,$matches) ? true:false;

		});
		
		$this->load->view("header");
		$this->load->view("main/gallery",['images'=>$images]);
		$this->load->view("footer");

	}
}
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
}
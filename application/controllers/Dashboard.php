<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('index');
		$this->load->view('templates/auth_footer');
	}
	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('template/user/header');
		$this->load->view('template/user/navigasi');
		$this->load->view('template/user/body');
		$this->load->view('template/user/footer');
	}
}
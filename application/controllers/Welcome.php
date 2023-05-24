<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function login()
	{
		$this->load->view('login/index');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function cursos()
	{
		$this->load->view('curso');
	}

	public function videos()
	{
		$this->load->view('video');
	}
}

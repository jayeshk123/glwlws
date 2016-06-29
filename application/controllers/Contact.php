<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		/* $this->load->model('Model_signup');
		$this->load->model('Model_login'); */
	}
	public function index()
	{
		$this->load->view('Contact');
	}
}
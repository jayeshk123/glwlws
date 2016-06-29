<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller
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
		$this->load->view('activities/Activities');
	}
	function jungle_safari()
	{
		$this->load->view("activities/Jungle_safari");
	}
	function bird_watching()
	{
		$this->load->view("activities/Bird_watching");
	}
	function photography()
	{
		$this->load->view("activities/Photography");
	}
	function jungle_trail()
	{
		$this->load->view("activities/Jungle_trail");
	}
}
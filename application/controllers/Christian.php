<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Christian extends CI_Controller {

		public function index()
	{
		$data = array(	'title'		=> 'Garis Studio 44 | Welcome');
		$this->load->view('landing/christianbreton',$data);
	}

	public function gold()
	{
		$data = array(	'title'		=> 'Garis Studio 44 | Welcome');
		$this->load->view('landing/gold',$data);
	}

	public function eye()
	{
		$data = array(	'title'		=> 'Garis Studio 44 | Welcome');
		$this->load->view('landing/eye',$data);
	}

	public function lips()
	{
		$data = array(	'title'		=> 'Garis Studio 44 | Welcome');
		$this->load->view('landing/lips',$data);
	}
}
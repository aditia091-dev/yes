<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Christian extends CI_Controller {

		public function index()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Welcome');
		$this->load->view('th_p/landing',$data);
	}

	public function gold()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Gold Series');
		$this->load->view('landing/gold',$data);
	}

	public function eye()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Eye Series');
		$this->load->view('landing/eye',$data);
	}

	public function lips()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Lips XL');
		$this->load->view('landing/lips',$data);
	}
	public function home()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Lips XL');
		$this->load->view('landing/home',$data);
	}
	public function d_gold()
	{
		$data = array(	'title'		=> 'Chritian Breton Indonesia | Lips XL');
		$this->load->view('n_detail/nav',$data);
	}
}
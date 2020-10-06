<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Christian extends CI_Controller {

		public function index()
	{
		$data = array(	'title'		=> 'Welcome | Christian Breton Indonesia');
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
		$data = array(	'title'		=> 'Christian Breton Indonesia | Lips XL');
		$this->load->view('landing/home',$data);
	}
	public function d_gold()
	{
		$data = array(	'title'		=> 'Gold Series | Christian Breton Indonesia ');
		$this->load->view('n_detail/gold',$data);
	}
	public function d_eye()
	{
		$data = array(	'title'		=> 'Eye Priority | Christian Breton Indonesia');
		$this->load->view('n_detail/eye',$data);
	}
	public function d_lips()
	{
		$data = array(	'title'		=> 'Lips XL | Christian Breton Indonesia');
		$this->load->view('n_detail/lips',$data);
	}
	public function contactus()
	{
		$data = array(	'title'		=> 'Contact Us | Christian Breton Indonesia');
		$this->load->view('n_detail/contactus',$data);
	}
	public function christian_breton_product()
	{
		$data = array(	'title'		=> 'Our Product | Christian Breton Indonesia');
		$this->load->view('n_detail/v_our_prod',$data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_admin') != TRUE)
		{
			set_pesan('Silahkan login terlebih dahulu', false);
			redirect('administrator');
		}
	}

	public function index()
	{
        $data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $data);
	}
}

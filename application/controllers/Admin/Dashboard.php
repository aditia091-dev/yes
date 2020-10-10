<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_admin') != TRUE)
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Gagal!</strong> Silahkan Login terlebih dahulu.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator');
		}
	}

	public function index()
	{
        $data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $data);
	}
}

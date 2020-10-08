<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login', 'login');
	}

	public function index()
	{
		$data['title']	= 'Login Administrator';
		$this->load->view('admin/login', $data);
	}

	public function proses()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = htmlspecialchars($this->input->post('password', true));
		
		$user = $this->login->get_admin($username);
		if($user->num_rows() > 0)
		{
			$get_user = $user->row_array();
			if(password_verify($password, $get_user['password']))
			{
				$this->session->set_userdata('login_admin', TRUE);
				$this->session->set_userdata('id_admin', $get_user['id_admin']);
				$this->session->set_userdata('nama', $get_user['nama_admin']);
				$this->session->set_userdata('username', $get_user['username']);
				redirect('dashboard');
			}
			else 
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Gagal!</strong> Username atau Password Salah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('administrator');
				
			}
		} 
		else 
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Gagal!</strong> Username tidak terdaftar.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login_admin');
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil logout.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator');
	}
}

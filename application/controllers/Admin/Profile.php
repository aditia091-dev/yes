<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_admin') != TRUE)
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Gagal!</strong> Silahkan Login terlebih dahulu.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator');
		}
	}

	private function validation()
	{
		$username_baru = $this->input->post('username');
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if($username == $username_baru){
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_user.username]', array('is_unique' => 'Username sudah terdaftar' ));
		}
	}

	private function validation_password()
	{
		$this->form_validation->set_rules('old_password', 'Old Password', 'required|trim');
		$this->form_validation->set_rules('new_password', 'New Password', 'required|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');
	}

	public function index()
	{
		$id_admin 		= $this->session->userdata('id_admin');
		$data['title']	= 'Profile';
		$data['admin']	= $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
		$this->load->view('admin/profile/data', $data);
	}

	public function setting()
	{
		
		$id_admin = $this->session->userdata('id_admin');
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title'] 		= 'Profile';
			$data['admin']	= $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();	
			$this->load->view('admin/profile/setting', $data);
		} else {
			$data = $this->input->post(null, true);
			$data_admin	= [
				'id_admin'	=> $data['id_admin'],
				'nama_admin'		=> $data['nama'],
				'username'	=> $data['username'],
			];
			$insert = $this->M_admin->update($data_admin);
			if ($insert) {
				$this->session->set_flashdata('msg', 'error');
			} else {
				$this->session->set_flashdata('msg', 'edit');
			}
			redirect('setting');
		}
	}

	public function password()
	{
		$id_admin = $this->session->userdata('id_admin');
        $this->validation_password();
		if (!$this->form_validation->run()) {
			$data['title'] 	= 'Profile';
			$data['admin']	= $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
			$this->load->view('admin/profile/password', $data);
		} else {
			$data 			= $this->input->post(null, true);
			$id_admin 		= $data['id_admin'];
			$get_admin 		= $this->M_admin->get_by_id($id_admin);
			$old_password 	= $data['old_password'];
			if(password_verify($old_password, $get_admin['password'])){
				$data_admin	= [
					'id_admin'	=> $data['id_admin'],
					'password'	=> password_hash($data['new_password'], PASSWORD_DEFAULT),
				];
				$insert = $this->M_admin->update($data_admin);
				if ($insert) {
					$this->session->set_flashdata('msg', 'error');
				} else {
					$this->session->set_flashdata('msg', 'edit');
				}
				redirect('change-password');
			} else {
				$this->session->set_flashdata('msg', 'error');
				redirect('change-password');
			}
		}
	}

	public function cek_username($nama)
	{
		$username	= $this->input->post('username');
		$cek		= $this->db->get_where('admin', ['username' => $username])->num_rows();
		if ($username == $nama) {
			$lists	= '';
		} else {
			if($cek>0){
				$lists = "Username sudah terdaftar";
			} else {
				$lists = '';
			}
		}
		$callback = [
			'dup_username'	=> $lists
		];
		echo json_encode($callback);
	}

	public function cek_email($nama)
	{
		$email	= $this->input->post('email');
		$cek	= $this->db->get_where('admin', ['email' => $email])->num_rows();
		if ($email == $nama) {
			$lists	= '';
		} else {
			if($cek > 0){
				$lists = "Email sudah terdaftar";
			} else {
				$lists = '';
			}
		}
		$callback = [
			'dup_email'	=> $lists
		];
		echo json_encode($callback);
	}
}

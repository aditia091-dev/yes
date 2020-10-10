<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $data['title']		= 'Kelola Admin';
        $data['admin']		= $this->M_admin->get_data();
		$this->load->view('admin/admin/data', $data);
	}

	public function tambah()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']	= 'Tambah Admin';
			$this->load->view('admin/admin/tambah', $data);
		} else {
            $data		= $this->input->post(null, true);
			$data_admin	= [
				'nama_admin'		=> $data['nama'],
				'username'	=> $data['username'],
                'password'	=> password_hash($data['password'], PASSWORD_DEFAULT),
                'is_active'  => '1'
			];
			if ($this->M_admin->insert($data_admin)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-admin');
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('admin');
			}
		}
	}

	public function edit($id)
	{

		$id_admin	= $id;
		$this->validation_edit($id_admin);
		if (!$this->form_validation->run()) {
			$data['title']		= 'Edit Admin';
			$data['admin']		= $this->M_admin->get_by_id($id_admin);
			$this->load->view('admin/admin/edit', $data);
		} else {
			$data		= $this->input->post(null, true);
			$data_admin	= [
				'id_admin'	=> $id_admin,
				'nama_admin'		=> $data['nama'],
				'username'	=> $data['username'],
            ];
            
			if ($this->M_admin->update($data_admin)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('edit-admin');
			} else {
				$this->session->set_flashdata('msg', 'edit');
				redirect('admin');
            }
		}
	}

	private function validation()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric|is_unique[admin.username]', ['is_unique'	=> 'Username Sudah Terdaftar']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'matches[password]|required');
    }
    
    private function validation_edit($id_admin)
	{
		$username_baru 	= $this->input->post('username');
		$data			= $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
		$username 		= $data['username'];
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if($username == $username_baru){
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', array('is_unique' => 'Username sudah terdaftar' ));
		}
	}

	public function hapus()
	{
		$id_admin = $this->input->post('id_admin');
		$this->M_admin->delete($id_admin);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('admin');
    }
    
    private function upload_foto()
	{
		$config['upload_path'] 		= './assets/img/profile';
		$config['allowed_types'] 	= 'jpg|png|jpeg';
		$config['max_size'] 		= 5100;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		

		if(! $this->upload->do_upload('foto'))
		{
			return 'user.png';
		}

		return $this->upload->data('file_name');
	}

	public function cek_username()
	{
		$username=$this->input->post('username');
		$cek=$this->db->get_where('admin', ['username' => $username])->num_rows();
		if($cek>0){
			$lists = "Username sudah terdaftar";
		} else {
			$lists = '';
		}
		$callback = [
			'dup_username'	=> $lists
		];
		echo json_encode($callback);
	}

	public function cek_username_edit($nama)
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
}

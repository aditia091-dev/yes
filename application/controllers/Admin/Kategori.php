<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
        $data['title']		= 'Kelola Kategori Konten';
        $data['kategori']	= $this->M_kategori->get_data();
		$this->load->view('admin/kategori/data', $data);
	}

	public function tambah()
	{
		$this->validation();
		if (!$this->form_validation->run()) {
			$data['title']	= 'Tambah Kategori Konten';
			$this->load->view('admin/kategori/tambah', $data);
		} else {
            $data		= $this->input->post(null, true);
            $pch_kategori = explode(' ', $data['kategori']);
            $jml = count($pch_kategori);
            $tag = '';
            for ($i=0; $i < $jml; $i++) { 
            	$tag .= strtolower($pch_kategori[$i]).'-';
            }
            $tag = substr($tag, 0, -1);
            $gambar       = $this->upload_gambar();
			$data_kategori	= [
				'kategori'		=> $data['kategori'],
				'kode_warna'	=> $data['kode_warna'],
                'tag'	=> $tag,
                'gambar'  => $gambar
			];
			if ($this->M_kategori->insert($data_kategori)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-kategori');
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('kategori');
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

	private function upload_gambar()
	{
		$config['upload_path'] 		= './assets/images/kategori';
		$config['allowed_types'] 	= 'jpg|png|jpeg';
		$config['max_size'] 		= 10000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		

		if(! $this->upload->do_upload('gambar'))
		{
			return '';
		}

		return $this->upload->data('file_name');
	}

	private function validation()
	{
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('kode_warna', 'Kode Warna', 'required|trim');

    }

	public function hapus()
	{
		$id_kategori = $this->input->post('id_kategori');
		$this->M_kategori->delete($id_kategori);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('kategori');
    }

    private function upload_gambar_konten()
	{
		$config['upload_path'] 		= './assets/images/konten';
		$config['allowed_types'] 	= 'jpg|png|jpeg';
		$config['max_size'] 		= 10000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);	

		if(! $this->upload->do_upload('gambar'))
		{
			return '';
		}

		return $this->upload->data('file_name');
	}

	private function validation_konten()
	{
		$this->form_validation->set_rules('judul_konten', 'Nama Konten', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
		$this->form_validation->set_rules('cara_penggunaan', 'Cara Penggunaan', 'required|trim');
    }

    public function detail($id_kategori,$tag)
	{
        $data['title']		= 'Kelola Konten';
        $data['id_kategori']= $id_kategori;
        $data['tag']		= $tag;
        $data['konten']		= $this->M_konten->get_data_by_id($id_kategori);
		$this->load->view('admin/konten/data', $data);
	}

	public function tambah_konten($id_kategori,$tag)
	{
		$this->validation_konten();
		if (!$this->form_validation->run()) {
			$data['title']	= 'Tambah Konten';
			$data['id_kategori']= $id_kategori;
        	$data['tag']		= $tag;
			$this->load->view('admin/konten/tambah', $data);
		} else {
			$data		= $this->input->post(null, true);
            $gambar       = $this->upload_gambar_konten();
			$data_kategori	= [
				'id_kategori'		=> $id_kategori,
				'tag'				=> $tag,
				'judul_konten'		=> $data['judul_konten'],
				'deskripsi'			=> $data['deskripsi'],
                'cara_penggunaan'	=> $data['cara_penggunaan'],
                'gambar'  			=> $gambar
			];
			if ($this->M_konten->insert($data_kategori)) {
				$this->session->set_flashdata('msg', 'error');
				redirect('tambah-konten/'.$id_kategori.'/'.$tag);
			} else {
				$this->session->set_flashdata('msg', 'success');
				redirect('detail-kategori/'.$id_kategori.'/'.$tag);
			}
		}
	}

	public function hapus_konten()
	{
		$id_kategori = $this->input->post('id_kategori');
		$tag = $this->input->post('tag');
		$id_konten = $this->input->post('id_konten');
		$this->M_konten->delete($id_konten);
		$this->session->set_flashdata('msg', 'hapus');
		redirect('detail-kategori/'.$id_kategori.'/'.$tag);
    }
}

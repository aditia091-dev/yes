<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konten extends CI_Model {

	public $table	= 'konten';

	public function get_data()
	{
        return $this->db->get($this->table)->result_array();
	}

	public function get_data_by_id($id_kategori)
	{
		return $this->db->get_where($this->table, ['id_kategori' => $id_kategori])->result_array();
	}

	public function get_data_by_tag($tag)
	{
		return $this->db->get_where($this->table, ['tag' => $tag])->result_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function get_by_id($id_konten)
	{
		return $this->db->get_where($this->table, ['id_konten' => $id_konten])->row_array();
	}

	public function update($data)
	{
		$this->db->where('id_konten', $data['id_konten']);
		$this->db->update($this->table, $data);
	}

	public function delete($id_konten)
	{
		$this->db->delete($this->table, ['id_konten' => $id_konten]);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public $table	= 'admin';

	public function get_data()
	{
        return $this->db->get($this->table)->result_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function get_by_id($id_admin)
	{
		return $this->db->get_where($this->table, ['id_admin' => $id_admin])->row_array();
	}

	public function update($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update($this->table, $data);
	}

	public function delete($id_admin)
	{
		$this->db->delete($this->table, ['id_admin' => $id_admin]);
	}
}

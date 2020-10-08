<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function get_admin($username)
	{
        return $this->db->get_where('admin', ['username' => $username]);
	}

}

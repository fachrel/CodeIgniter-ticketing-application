<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas_model extends CI_Model {
	public function login($post)
	{
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
	}
}

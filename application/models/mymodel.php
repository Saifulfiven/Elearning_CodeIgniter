<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model{
	public function tam_data($tabel,$where = ""){
		$data = $this->db->query("SELECT * from $tabel ".$where);
		return $data->result_array();
	}

	public function tam_data_gabung($field,$tabel,$where = ""){
		$data = $this->db->query("SELECT $field from $tabel ".$where);
		return $data->result_array();
	}
}
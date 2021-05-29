<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_global extends CI_Model {
  public function get_all($tabel){
    $q = $this->db->get($tabel);
    return $q;
  }
  public function get_detail($tabel,$where){
		$this->db->from($tabel)
				 ->where($where);
		$q = $this->db->get();
		return $q;
	}
  public function cek_row($query){
		return $query->num_rows();
	}
}
?>

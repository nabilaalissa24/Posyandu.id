<?php 
class M_catatankesehatan extends CI_Model {
		
	public function getCatatankesehatan($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('catatan_kesehatan');
        return $query->result_array();
    }
}
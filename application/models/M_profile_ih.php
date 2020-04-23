<?php 
class M_profile_ih extends CI_Model {
		
	public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('profile_ibuhamil');
        return $query->row_array();
    }
}
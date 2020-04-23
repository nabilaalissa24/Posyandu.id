<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_profile_ih');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_ibuhamil'] = $this->M_profile_ih->getProfile($user);
        $this->load->view('profilIH', $data);
    }
}
?>
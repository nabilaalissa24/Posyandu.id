<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_userLogin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_userlogin');
        $this->load->library('session');
    }
    
    public function index()
    {
        $this->load->view('user-login');
    }

    public function aksi_login() {
        $data['username'] = $this->input->post('username');
   		$data['password'] = $this->input->post('password');
		 
		if($this->M_userlogin->login($data)) {
   			$this->session->set_userdata('username', $this->input->post('username'));
    		$this->session->set_userdata('password', $this->input->post('password'));
  			redirect('C_ibuhamil_feed');
		} 
		else {
            redirect('C_userlogin', $data); 
        }
    }
}
?>
<?php

class HomeAdministrativo extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        
        if ($this->session->userdata('role')==1) {
           
            $data['view'] = 'HomeAdministrativo';
            $this->load->view('includes/template', $data); 
        }else{
            redirect('Home');
        }
        
        
    }
}

<?php

class Contactos extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'Contactos';
        $this->load->view('includes/template', $data);
    }

}

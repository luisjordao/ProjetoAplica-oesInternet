<?php

class NoticiaGrande extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $data['view'] = 'NoticiaGrande';
         $data['view'] = 'NoticiaGrande';
        $this->load->view('includes/template', $data);
    }
    
}

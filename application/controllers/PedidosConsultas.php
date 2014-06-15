<?php

class PedidosConsultas extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {
        $this->load->model('consulta_model');
        
        $data['view'] = 'PedidosConsultas';
        $data['consulta'] = $this->consulta_model->getPedidosConsultaAdmin() ;

        $this->load->view('includes/template', $data);

    }
}
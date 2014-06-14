<?php

class Utilizador extends CI_Controller{
    
    public function __construct() {
        parent::__construct(); 
    }
    
    public function index() {}

    public function autenticacao() {

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('email',    'Email',    'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['view'] = 'login_read_view';
            $this->load->view('includes/template', $data);
        } else {
            $this->load->model('Utilizador_model');
 
            if (!$this->Utilizador_model->autenticacao()) { 
                $this->session->set_flashdata('error', 'Email or password incorrect.');
                redirect('Utilizador/autenticacao');
            } 
            redirect('HomeMedico');
        }

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect();
    }

}
<?php

require_once('ESCourseValidation.php');

class Users extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function login() 
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('password', 'Senha', 'required');

        if ($this->form_validation->run() === FALSE) {
            $errors = array('msgs' => validation_errors());
            $this->load->view('pages/login', $errors);
            return;
        } else {
            $user = $this->users_model->getByEmailAndPassword();
            if ($user->account_type === 'intern') {
                $this->session->set_userdata(['user' => $user]);
                redirect('home/intern', 'location', 302);
                die();
            }
            if ($user->account_type === 'employer') {
                $this->session->set_userdata(['user' => $user]);
                redirect('home/employer', 'location', 302);
                die();
            }
        } 
    }

	public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('auth/login', 'location', 302);
        die();
    }

    public function register()
    {
        $this->load->helper('url');
        $this->load->view('pages/register');
    }

    public function new()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('password', 'Senha', 'required');
        $this->form_validation->set_rules('passconf', 'Confirmação de senha', 'required|matches[password]');
        $this->form_validation->set_rules('type', 'Tipo de Usuário', 'required');

        if($this->input->post('type') === 'intern') {
            $this->form_validation->set_rules('ingressYear', 'Ano de ingresso', 'required');
            $this->form_validation->set_rules('name', 'Nome', 'required');
            $this->form_validation->set_rules('course', 'Curso', 'required');
            $this->form_validation->set_rules('minicurriculum', 'Minicurrículo', 'required');
        }

        if($this->input->post('type') === 'employer') {
            $this->form_validation->set_rules('nameCompany', 'Nome da empresa', 'required');
            $this->form_validation->set_rules('name', 'Nome', 'required');
            $this->form_validation->set_rules('description', 'Descrição', 'required');
            $this->form_validation->set_rules('address', 'Endereço', 'required');
        }

        if($this->form_validation->run() === false) {
            $errors = array('msgs' => validation_errors());
            $this->load->view('pages/register', $errors);
        } else {
            $this->users_model->new();
            redirect('users/login', 'location', 302);
            die();
        }
    }

}

<?php

require_once('CourseValidation.php');
require_once('ESCourseValidation.php');
require_once('CCCourseValidation.php');
require_once('SICourseValidation.php');
require_once('GenericValidation.php');

class Offer extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('offers_model');
        $this->load->model('interest_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function new_interest()
    {
        if(count($this->input->post()) === 1) {
            $msgs = '<p>Selecione pelo menos uma oferta</p>';
            $results = $this->offers_model->get();
            $this->load->helper('url');
            $this->load->view('pages/intern', ['offers' => $results, 'msgs' => $msgs]);
            return;
        }

        $selected_offers = [];
        foreach(array_keys($this->input->post()) as $key) {
            if($this->input->post($key) === 'on') {
                array_push($selected_offers, $key);
            }
        }
        $results = $this->interest_model->declare_interest($selected_offers, $this->session->user->id);
        $this->load->view('pages/interest_success');
        return;
    }

    public function index() 
    {
        $this->load->helper('url');
        $this->load->view('pages/new_offer');
    }
    
    public function new_offer() 
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('description', 'Descrição', 'required');
        $this->form_validation->set_rules('activities', 'Atividades', 'required');
        $this->form_validation->set_rules('required_year', 'Ano requerido', 'required');
        $this->form_validation->set_rules('required_skills', 'Habilidades necessárias', 'required');
        $this->form_validation->set_rules('salary', 'Salário', 'required');
        $this->form_validation->set_rules('hours', 'Horas de trabalho', 'required');
        $this->form_validation->set_rules('course', 'Curso', 'required');

        if($this->form_validation->run() === false) {
            $errors = ['msgs' => validation_errors()];
            $this->load->view('pages/new_offer', $errors);
        } else {
            $courseId = $this->input->post('course');
            $error = null;

            if($courseId === "1") $error = $this->offers_model->new(new CCCourseValidation());
            if($courseId === "2") $error = $this->offers_model->new(new ESCourseValidation());
            if($courseId === "3") $error = $this->offers_model->new(new SICourseValidation());
            if($courseId === "4") $error = $this->offers_model->new(new GenericCourseValidation());


            if($error !== null) {
                $errors = ['msgs' => $error];
                $this->load->view('pages/new_offer', $errors);
                return;
            }

            redirect('home/employer', 'location', 302);
            die();
        }
    }

}
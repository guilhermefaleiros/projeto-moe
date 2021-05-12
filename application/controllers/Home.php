<?php

class Home extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('offers_model');
        $this->load->model('interest_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function employer() 
    {
        $user = $this->session->user ?? null;
        if(!$user) {
            redirect('users/login', 'location', 302);
            die();
            return;
        }

        if($user->account_type === 'intern') {
            redirect('home/intern', 'location', 302);
            die();
            return;
        }
        $results = $this->offers_model->get();
        $this->load->helper('url');
        $this->load->view('pages/employer', ['offers' => $results]);
    }

    public function intern() 
    {
        $this->session->unset_userdata('user');
        $user = $this->session->user ?? null;
        if(!$user) {
            redirect('users/login', 'location', 302);
            die();
            return;
        }
        if($user->account_type === 'employer') {
            redirect('home/employer', 'location', 302);
            die();
            return;
        }
        $results = $this->offers_model->get();
        $this->load->helper('url');
        $this->load->view('pages/intern', ['offers' => $results]);
    }

}
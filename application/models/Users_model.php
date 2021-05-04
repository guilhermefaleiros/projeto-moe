<?php

class Users_model extends CI_Model
{
    protected $table_name = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getByEmail()
    {
        $email = $this->input->post('email');
        $query = $this->db->get_where($this->table_name, array('email' => $email));
        return $query->first_row();
    }

    public function getByEmailAndPassword()
    {
        $user = $this->getByEmail();

        if (!$user) {
            return false;
        }

        $password = $this->input->post('password');
        $hash = $user->password;

        if (!password_verify($password, $hash)) {
            return false;
        }

        return $user;
    }

    public function new() {
        $this->load->helper('url');
        $data = [
            'email' => $this->input->post('email'),
            'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'account_type' => $this->input->post('type'),
            'name' => $this->input->post('name'),
            'course_name' => $this->input->post('course'),
            'curriculum' => $this->input->post('minicurriculum'),
            'ingress_year' => $this->input->post('ingressYear'),
            'contact_name' => $this->input->post('contactName'),
            'company_name' => $this->input->post('companyName'),
            'company_address' => $this->input->post('address'),
            'company_description' => $this->input->post('description')
        ];
        return $this->db->insert($this->table_name, $data);
    }


}
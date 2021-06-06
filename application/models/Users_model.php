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

    public function getEmployers($user_id) {
		$queryString = "SELECT * FROM users as u WHERE account_type = 'employer' AND NOT EXISTS 
		(SELECT * FROM company_interest WHERE company_id = u.id and user_id = $user_id)";
		$query = $this->db->query($queryString);
        return $query->result();
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

	public function userInterestedOnCompany($companyId) {
		$queryString = "SELECT * FROM users as u WHERE account_type = 'intern' AND EXISTS 
		(SELECT * FROM company_interest WHERE user_id = u.id and company_id = $companyId)";
		$query = $this->db->query($queryString);
        return $query->result();
	}


}

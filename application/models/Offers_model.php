<?php

class Offers_model extends CI_Model
{
    protected $table_name = 'offers';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function new($validationStrategy) {
        if($validationStrategy->validate($this->input->post('required_year'))) {
            $data = [
                'name' => $this->input->post('description'),
                'activities' =>  $this->input->post('activities'),
                'required_year' => $this->input->post('required_year'),
                'required_skills' => $this->input->post('required_skills'),
                'hours' => $this->input->post('hours'),
                'salary' => $this->input->post('salary'),
                'course_id' => $this->input->post('course')
            ];
            $this->db->insert($this->table_name, $data);
            return null;
        }

        $message = $validationStrategy->getMessage();
        return "<p>$message</p>";
    }

}
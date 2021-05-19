<?php

class Interest_model extends CI_Model
{
    protected $table_name = 'company_interest';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function declare_interest($companies_id, $user_id) {
        $results = [];
        foreach($companies_id as $company_id) {
            $data = [
                'company_id' => $company_id,
                'user_id' => $user_id
            ];
            array_push($results, $this->db->insert($this->table_name, $data)); 
        }
        return $results;
    }

}
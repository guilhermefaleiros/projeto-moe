<?php

class Interest_model extends CI_Model
{
    protected $table_name = 'offer_interest';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function declare_interest($offers_id, $user_id) {
        $results = [];
        foreach($offers_id as $offer_id) {
            $data = [
                'offer_id' => $offer_id,
                'user_id' => $user_id
            ];
            array_push($results, $this->db->insert($this->table_name, $data)); 
        }
        return $results;
    }

}
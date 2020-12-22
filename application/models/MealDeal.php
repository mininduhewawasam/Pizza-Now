<?php

class MealDeal extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllPizzaDeals()
    {
        $query = $this->db->get('MealDeals');
        return $query;
    }

    public function getDealById($id)
    {
        $query = $this->db->get_where('MealDeals', array('id' => $id));
        return $query->row();
    }

}
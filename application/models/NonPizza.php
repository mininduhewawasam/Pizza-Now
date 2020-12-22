<?php

class NonPizza extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllNonPizzas()
    {
        $query = $this->db->get('NonPizzas');
        return $query;
    }

    public function getNonPizzaById($id)
    {
        $query = $this->db->get_where('NonPizzas', array('id' => $id));
        return $query->row();
    }
}
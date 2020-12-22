<?php

class Pizza extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllPizzas ()
    {
        $query = $this->db->get('Pizzas');
        return $query;
    }

    public function getPizzaBySlug ($slug)
    {
        $query = $this->db->get_where('Pizzas', array('slug' => $slug));
        return $query->row();
    }

    public function getPizzaById ($id)
    {
        $query = $this->db->get_where('Pizzas', array('id' => $id));
        return $query->row();
    }

    public function getAllPizzaPricesById ($pizzaId)
    {
        $this->db->where('pizzaId', $pizzaId);
        $this->db->from('PizzaPrices');
        return $query = $this->db->get()->result();
    }

    public function getPizzaPriceByIdAndSize ($pizzaId, $pizzaSize)
    {
        $query = $this->db->get_where('PizzaPrices', array('pizzaId' => $pizzaId, 'size' => $pizzaSize));
        return $query->row();
    }

    public function calculatePizzaTotal($price, $toppingSubTotal)
    {
        return ($price+$toppingSubTotal);
    }
}
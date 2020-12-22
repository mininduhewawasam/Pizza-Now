<?php


class Topping extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllPizzaToppings ()
    {
        $query = $this->db->get('Toppings');
        return $query->result();
    }

    public function getToppingsByIds ($toppingId)
    {
        $this->db->where('id', $toppingId);
        $this->db->from('Toppings');
        return $query = $this->db->get()->row_array();
    }

    public function getPizzaToppingDetails($toppingIds)
    {
        if (isset($toppingIds)) {
            $toppings = array();
            foreach ($toppingIds as $id) {
                $topping = $this->getToppingsByIds($id);
                $toppings[] = $topping;
            }
            return $toppings;
        }
    }

    public function getPizzaToppingName($toppingIds)
    {
        if (isset($toppingIds)) {
            $toppings = array();
            foreach ($toppingIds as $id) {
                $topping = $this->getToppingsByIds($id);
                $toppings[] = $topping['name'];
            }
            return $toppings;
        }
    }

    public function getToppingSubTotal ($toppingIds)
    {
        $subTotal = 0;
        if (isset($toppingIds)) {
            $toppings = $this->getPizzaToppingDetails($toppingIds);
            foreach ($toppings as $topping) {
                $subTotal += $topping['price'];
            }
            return $subTotal;
        }
    }

}
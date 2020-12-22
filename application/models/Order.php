<?php

class Order extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function placeOrder ($orderData, $orderItems)
    {
        $orderId = $this->saveOrder($orderData);
        foreach ($orderItems as $orderItem) {
            if ($orderItem['mealType'] == 1) {
                $this->saveOrderPizza($orderItem, $orderId);
            }elseif ($orderItem['mealType'] == 2) {
                $this->saveOrderNonPizza($orderItem, $orderId);
            }elseif ($orderItem['mealType'] == 3) {
                $this->saveOrderMealDeals($orderItem, $orderId);
            }
        }
        return $orderId;
    }

    private function saveOrder ($oderData)
    {
        $this->db->insert('Orders', $oderData);
        return $this->db->insert_id();
    }

    private function saveOrderPizza($orderPizza, $orderId)
    {
        $data = array(
            'orderId' => $orderId,
            'pizzaId' => $orderPizza['mealId'],
            'price' => $orderPizza['price'],
            'size' => $orderPizza['size'],
            'quantity' => $orderPizza['qty']
        );
        $this->db->set($data);
        $this->db->insert('OrderPizzas');

        $orderPizzaId = $this->db->insert_id();
        if (isset($orderPizza['toppings'])) {
            $toppings = $orderPizza['toppings'];
            $this->saveOrderPizzaToppings($toppings, $orderPizzaId);
        }
    }

    private function saveOrderPizzaToppings ($toppings, $orderPizzaId)
    {
        foreach ($toppings as $topping) {
            $data = array(
                'orderPizzaId' => $orderPizzaId,
                'pizzaToppingId' => $topping,

            );
            $this->db->set($data);
            $this->db->insert('OrderPizzaToppings');
        }
    }

    private function saveOrderNonPizza($orderNonPizza, $orderId)
    {
        $data = array(
            'orderId' => $orderId,
            'nonPizzaId' => $orderNonPizza['mealId'],
            'price' => $orderNonPizza['subtotal'],
            'quantity' => $orderNonPizza['qty']
        );
        $this->db->set($data);
        $this->db->insert('OrderNonPizzas');
    }

    private function saveOrderMealDeals ($orderMealDeals, $orderId)
    {
        $data = array(
            'orderId' => $orderId,
            'mealDealId' => $orderMealDeals['mealId'],
            'price' => $orderMealDeals['subtotal'],
        );
        $this->db->set($data);
        $this->db->insert('orderMealDeals');
    }

    public function getOrderById($orderId)
    {
        $this->db->where('id', $orderId);
        $this->db->from('Orders');
        return $query = $this->db->get()->row_array();
    }


    public function getOrder($orderId)
    {
        $this->db->where('orderId', $orderId);
        $this->db->from('Orders');
        return $query = $this->db->get()->row_array();
    }

    public function getOrderPizzas($orderId) {
        $orderPizzas = $this->getOrderPizzasByOrderId($orderId);
        $orderPizzaDetails = null;
        foreach ($orderPizzas as $orderPizza) {
            $orderPizzaId = $orderPizza['id'];
            $pizzaId = $orderPizza['pizzaId'];
            $pizzas = $this->getPizzaById($pizzaId);
            $orderPizzaToppings = $this->getOrderPizzasToppings($orderPizzaId);
            $pizzas['price'] = $orderPizza['price'];
            $pizzas['size'] = $orderPizza['size'];
            $pizzas['quantity'] = $orderPizza['quantity'];
            $pizzas['toppings'] = $orderPizzaToppings;
            $orderPizzaDetails[] = $pizzas;
        }
        return $orderPizzaDetails;
    }

    public function getOrderNonPizza($orderId) {
        $orderNonPizzas = $this->getOrderNonPizzasByOrderId($orderId);
        $orderNonPizzaDetails = null;
        foreach ($orderNonPizzas as $orderNonPizza) {
            $nonPizzaId = $orderNonPizza['nonPizzaId'];
            $nonPizza = $this->getNonPizzaById($nonPizzaId);
            $nonPizza['price'] = $orderNonPizza['price'];
            $nonPizza['quantity'] = $orderNonPizza['quantity'];
            $orderNonPizzaDetails[] = $nonPizza;
        }
        return $orderNonPizzaDetails;
    }

    public function getOrderMealDeals($orderId) {
        $orderMealDeals = $this->getOrderMealDealsByOrderId($orderId);
        $orderMealDealDetails = null;
        foreach ($orderMealDeals as $orderMealDeal) {
            $mealDealId = $orderMealDeal['mealDealId'];
            $mealDeal = $this->getMealDealById($mealDealId);
            $mealDeal['price'] = $orderMealDeal['price'];
            $orderMealDealDetails[] = $mealDeal;
        }
        return $orderMealDealDetails;
    }

    private function getOrderMealDealsByOrderId($orderId) {
        $this->db->where('orderId', $orderId);
        $this->db->from('orderMealDeals');
        return $query = $this->db->get()->result_array();
    }

    private function getOrderPizzasByOrderId($orderId) {
        $this->db->where('orderId', $orderId);
        $this->db->from('OrderPizzas');
        return $query = $this->db->get()->result_array();
    }

    private function getOrderPizzasToppings($orderPizza) {
        $this->db->where('orderPizzaId', $orderPizza);
        $this->db->from('OrderPizzaToppings');
        $orderPizzaToppings = $this->db->get()->result_array();

        $toppings = null;
        foreach ($orderPizzaToppings as $orderPizzaTopping) {
            $topping = $this->getToppingById($orderPizzaTopping['pizzaToppingId']);
            $toppings[] = $topping['name'];
        }
        return $toppings;
    }

    private function getOrderNonPizzasByOrderId($orderId) {
        $this->db->where('orderId', $orderId);
        $this->db->from('OrderNonPizzas');
        return $query = $this->db->get()->result_array();
    }

    public function getToppingById ($toppingId)
    {
        $this->db->where('id', $toppingId);
        $this->db->from('Toppings');
        return $query = $this->db->get()->row_array();
    }

    private function getPizzaById ($pizzaId)
    {
        $this->db->where('id', $pizzaId);
        $this->db->from('Pizzas');
        $query = $this->db->get()->row();
        $pizza = array(
            'id' => $query->id,
            'name'=> $query->name,
            'image' => $query->image,
        );
        return $pizza;
    }

    private function getNonPizzaById ($nonPizzaId)
    {
        $this->db->where('id', $nonPizzaId);
        $this->db->from('NonPizzas');
        $query = $this->db->get()->row();
        $nonPizza = array(
            'id' => $query->id,
            'name'=> $query->name,
            'image' => $query->image,
        );
        return $nonPizza;
    }

    private function getMealDealById ($mealDealId)
    {
        $this->db->where('id', $mealDealId);
        $this->db->from('MealDeals');
        $query = $this->db->get()->row();
        $mealDeal = array(
            'id' => $query->id,
            'name'=> $query->name,
            'image' => $query->image,
        );
        return $mealDeal;
    }
}
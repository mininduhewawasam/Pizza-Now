<?php

class Customize extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pizza');
        $this->load->model('Topping');
        $this->load->model('Cart');
    }

    public function getPizza($slug = NULL) {
        $data['title'] = 'Pizza Now | Customize Your Pizza';
        $data['pizza'] = $this->Pizza->getPizzaBySlug($slug);
        $data['toppings'] = $this->Topping->getAllPizzaToppings();
        $pizzaId = $data['pizza']->id;
        $data['prices'] = $this->Pizza->getAllPizzaPricesById((int)$pizzaId);

        if (empty($data['pizza']))
        {
            show_404();
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/customize_pizza', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function getCustomizedPizza($pizzaId, $itemId = NULL)
    {
        $data['customizedPizza'] = $this->Cart->getCartItemById($itemId);
        $data['pizza'] = $this->Pizza->getPizzaById($pizzaId);
        $data['prices'] = $this->Pizza->getAllPizzaPricesById((int)$pizzaId);
        $data['toppings'] = $this->Topping->getAllPizzaToppings();
        $data['title'] ='Pizza Now | Edit Customized Pizza';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/update_customize_pizza', $data);
        $this->load->view('templates/footer', $data);

    }

}
<?php

class Meal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pizza');
        $this->load->model('NonPizza');
        $this->load->model('MealDeal');
    }

    public function index()
    {
        $data['title'] ='Pizza Now';
        $data['pizzas'] = $this->Pizza->getAllPizzas();
        $data['sides'] = $this->NonPizza->getAllNonPizzas();
        $data['mealDeals'] = $this->MealDeal->getAllPizzaDeals();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
    }

}

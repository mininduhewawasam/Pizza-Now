<?php
class ShoppingCart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pizza');
        $this->load->model('Topping');
        $this->load->model('NonPizza');
        $this->load->model('MealDeal');
        $this->load->model('Cart');
    }

    public function index()
    {
        $data['title'] ='Pizza Now | Cart';
        $data['cartItems'] = $this->Cart->getCartItems();
        $data['cartTotal'] = $this->Cart->getCartTotal();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/cart', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addPizzaToCart()
    {
        $pizzaId = $this->input->post('mealId');
        $pizzaSize = $this->input->post('mealSize');
        $pizzaToppings = $this->input->post('pizzaToppingIds');
        $pizzaQuantity = $this->input->post('pizzaQty');
        $pizza = $this->Pizza->getPizzaById($pizzaId);
        $pizzaPrice = $this->Pizza->getPizzaPriceByIdAndSize($pizzaId, $pizzaSize);
        $toppingSubtotal = $this->Topping->getToppingSubTotal($pizzaToppings);
        $pizzaTotalPrice = $this->Pizza->calculatePizzaTotal($pizzaPrice->price, $toppingSubtotal, $pizzaQuantity);
        $toppingDetails = $this->Topping->getPizzaToppingName($pizzaToppings);
        if(isset($pizza, $pizzaPrice)) {
            $data = array(
                'id'      => uniqid("P_"),
                'mealId' =>  $pizza->id,
                'image' =>  $pizza->image,
                'mealType' =>  self::PIZZA,
                'size' => $pizzaSize,
                'qty'     => $pizzaQuantity,
                'price'   => $pizzaTotalPrice,
                'name'    => $pizza->name,
                'toppings' => $pizzaToppings,
                'toppingDetails' => $toppingDetails
            );
            $this->Cart->add($data);
        }
    }

    public function addNonPizzaToCart()
    {
        $nonPizzaId = $this->input->post('mealId');
        $nonPizza = $this->NonPizza->getNonPizzaById($nonPizzaId);
        $qty = $this->input->post('qty');
        $data = array(
            'id'      => 'NP_'.$nonPizza->id,
            'mealId' =>  $nonPizza->id,
            'image' =>  $nonPizza->image,
            'mealType' =>  self::NON_PIZZA,
            'qty'     => $qty,
            'price'   => $nonPizza->price,
            'name'    => $nonPizza->name,
        );
        $this->Cart->add($data);
    }

    public function addDealToCart()
    {
        $dealId = $this->input->post('mealId');
        $mealDeal = $this->MealDeal->getDealById($dealId);
        $data = array(
            'id'      => 'D_'.$mealDeal->id,
            'mealId' =>  $mealDeal->id,
            'image' =>  $mealDeal->image,
            'mealType' =>  self::MEAL_DEAL,
            'qty'     => 1,
            'price'   => $mealDeal->price,
            'name'    => $mealDeal->name,
        );
        $this->Cart->add($data);
    }


    public function updateCustomizedPizza($id)
    {
        $pizzaId = $this->input->post('mealId');
        $pizzaSize = $this->input->post('mealSize');
        $pizzaToppings = $this->input->post('pizzaToppingIds');
        $pizzaQuantity = $this->input->post('pizzaQty');
        $pizza = $this->Pizza->getPizzaById($pizzaId);
        $pizzaPrice = $this->Pizza->getPizzaPriceByIdAndSize($pizzaId, $pizzaSize);
        $toppingSubtotal = $this->Topping->getToppingSubTotal($pizzaToppings);
        $pizzaTotalPrice = $pizzaPrice->price + $toppingSubtotal;
        $toppingDetails = $this->Topping->getPizzaToppingName($pizzaToppings);
        if (isset($pizza, $pizzaPrice)) {
            $data = array(
                'itemId' => $id,
                'mealId' => $pizza->id,
                'image' =>  $pizza->image,
                'mealType' => self::PIZZA,
                'size' => $pizzaSize,
                'qty' => $pizzaQuantity,
                'price' => $pizzaTotalPrice,
                'name' => $pizza->name,
                'toppings' => $pizzaToppings,
                'toppingDetails' => $toppingDetails
            );
            $this->Cart->update($data);
        }
    }

    public function updateCartItemQuantity($id)
    {
        $mealId = $this->input->post('mealId');
        $qty = $this->input->post('qty');
        $data = array(
            'id'      => $mealId,
            'qty' => $qty,
        );
        $this->Cart->update($data);
    }

    public function removeItemFromCart($mealId)
    {
        $this->Cart->removeCartItem($mealId);
    }


}
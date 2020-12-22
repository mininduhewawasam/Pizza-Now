<?php

class CartOrder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pizza');
        $this->load->model('Topping');
        $this->load->model('NonPizza');
        $this->load->model('MealDeal');
        $this->load->model('Order');
        $this->load->model('Cart');
    }

    public function index()
    {
        $data['title'] ='Pizza Now | Place Order';
        $data['cartItems'] = $this->Cart->getCartItems();
        $data['cartTotal'] = $this->Cart->getCartTotal();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/place_order', $data);
        $this->load->view('templates/footer', $data);
    }

    public function placeOrder()
    {
        $data['title'] ='Pizza Now | Place Order';
        $isDataValidated = $this->validateCustomerData();
        $orderCreatedTime = date('H:i:s');
        $deliveryTime = date('H:i:s', strtotime('+30 minutes', strtotime($orderCreatedTime)));
        if ($isDataValidated) {
            $customerName = $this->input->post('customerName');
            $customerEmail = $this->input->post('customerEmail');
            $customerMobile = $this->input->post('customerMobile');
            $customerAddress = $this->input->post('customerAddress');
            $orderDate = date('Y-m-d');
            $orderTotal = $this->Cart->getCartTotal();
            $orderItems = $this->Cart->getCartItems();

                $orderData = array(
                    'orderId'      => uniqid("o_"),
                    'name' =>  $customerName,
                    'email' =>  $customerEmail,
                    'phoneNo' =>  $customerMobile,
                    'deliveryAddress' => $customerAddress,
                    'orderTotal'     => $orderTotal,
                    'orderCreatedAt' => $orderCreatedTime,
                    'orderDeliveredAt' => $deliveryTime,
                    'orderDate' => $orderDate
                );
                $orderId = $this->Order->placeOrder($orderData, $orderItems);
                if ($orderId) {
                    $order = $this->Order->getOrderById($orderId);
                    $this->setSessionOrderId($orderId, $order);
                    $this->deleteCartSession();
                    redirect('/order');
                }
        }else {
            $data['cartItems'] = $this->Cart->getCartItems();
            $data['cartTotal'] = $this->Cart->getCartTotal();
            $this->load->view('templates/header', $data);
            $this->load->view('pages/place_order', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function validateCustomerData()
    {
        $this->form_validation->set_rules('customerName', 'Name', 'required');
        $this->form_validation->set_rules('customerEmail', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('customerMobile', 'Mobile No', 'trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('customerAddress', 'Address', 'required');

        return $this->form_validation->run();
    }

    public function orderConfirmationPage()
    {
        $orderId = $this->getSessionOrderId();
        $order = $this->Order->getOrder($orderId);
        $id = $order['id'];
        $orderPizzas = $this->Order->getOrderPizzas($id);
        $orderNonPizza = $this->Order->getOrderNonPizza($id);
        $orderMealDeals = $this->Order->getOrderMealDeals($id);
        $data['title'] = 'Pizza Now | Order Confirmation Page';
        $data['order'] = $order;
        $data['orderPizzas'] = $orderPizzas;
        $data['orderNonPizzas'] = $orderNonPizza;
        $data['orderMealDeals'] = $orderMealDeals;
        $this->load->view('templates/header', $data);
        $this->load->view('pages/confirmed_order', $data);
        $this->load->view('templates/footer', $data);
    }

    public function setSessionOrderId($orderId, $order)
    {
        $orders[] = array($orderId => $orderId);
        $this->session->set_userdata(array('orderId' => $order['orderId']));
    }

    public function getSessionOrderId()
    {
        return $this->session->userdata('orderId');
    }

    public function deleteCartSession()
    {
        $this->Cart->clearCart();
    }

}

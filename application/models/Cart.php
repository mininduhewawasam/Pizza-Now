<?php


class Cart extends CI_Model
{
    const PIZZA = 1;
    const NON_PIZZA = 2;
    private $cart = array();

    public function __construct()
    {
        $this->cart = $this->session->userdata('cart_contents');
        if ($this->cart === NULL)
        {
            $this->cart = array('cart_total' => 0);
        }
    }

    public function add($cartItem = array()) //function to add items to cart
    {
        $save_cart = FALSE;
        if (isset($cartItem['id']))
        {
            if (($itemId = $this->addToCartArray($cartItem)))
            {
                $save_cart = TRUE;
            }
        }

        if ($save_cart === TRUE)
        {
            $this->addToCartSession();
            return isset($itemId) ? $itemId : TRUE;
        }
        return FALSE;
    }

    private function addToCartArray($items = array()) //function to add item to cart array
    {
        if ( ! is_array($items) OR count($items) === 0)
        {
            return FALSE;
        }

        if ( !isset(
            $items['id'],
            $items['mealId'],
            $items['mealType'],
            $items['qty'],
            $items['price'],
            $items['name']))
        {
            return FALSE;
        }

        $items['qty'] = (float) $items['qty'];
        $items['price'] = (float) $items['price'];
        $itemId = $items['id'];

        if ($items['mealType'] == self::PIZZA) {
            if ( !isset($items['size'])) {
                return FALSE;
            }
        }

        if ($items['qty'] == 0) {
            return FALSE;
        }
        if (isset($this->cart[$itemId]['qty'])) {
            $old_quantity = (int) $this->cart[$itemId]['qty'];
        } else {
            $old_quantity = 0;
        }

        $items['itemId'] = $itemId;
        $items['qty'] += $old_quantity;
        $this->cart[$itemId] = $items;
        return $itemId;
    }

    public function update($items = array()) //function to update item
    {
        $save_cart = FALSE;
        if (isset($items['itemId']))
        {
            if ($this->updateCartArray($items) === TRUE)
            {
                $save_cart = TRUE;
            }
        }
        if ($save_cart === TRUE)
        {
            $this->addToCartSession();
            return TRUE;
        }

        return FALSE;
    }

    private function updateCartArray($items = array()) //function to add updated item to cart array
    {
        if ( ! is_array($items) OR count($items) === 0)
        {
            return FALSE;
        }
        if ( ! isset($items['itemId'], $this->cart[$items['itemId']]))
        {
            return FALSE;
        }

        if (isset($items['qty']))
        {
            $items['qty'] = (float) $items['qty'];
            if ($items['qty'] == 0)
            {
                unset($this->cart[$items['itemId']]);
                return TRUE;
            }
        }
        if (isset($items['price']))
        {
            $items['price'] = (float) $items['price'];
        }
        //separate keys from the array
        $keys = array_intersect(array_keys($this->cart[$items['itemId']]), array_keys($items));

        //iterate for item keys that values are updated
        foreach (array_diff($keys, array('id', 'name')) as $key)
        {
            $this->cart[$items['itemId']][$key] = $items[$key];
        }

        return TRUE;
    }

    private function addToCartSession() // function to add item to cart session
    {

        $this->cart['cart_total'] = 0;

        foreach ($this->cart as $key => $val) {
            $this->cart[$key]['subtotal'] = 0;
            $this->cart['cart_total'] += ($val['price'] * $val['qty']);
            $this->cart[$key]['subtotal'] = ($val['price'] * $val['qty']);
        }

        if (count($this->cart) <= 1)
        {
            $this->session->unset_userdata('cart_contents');
            return FALSE;
        }

        $this->session->set_userdata(array('cart_contents' => $this->cart));

        return TRUE;
    }

    public function getCartTotal() //function to get cart total
    {
        return $this->cart['cart_total'];
    }

    public function removeCartItem($itemId) // function to remove cart item
    {
        unset($this->cart[$itemId]);
        $this->addToCartSession();
    }

    public function getCartItems() // function to get all cart items
    {
        $cart =  $this->cart;
        unset($cart['cart_total']);
        return $cart;
    }

    public function getCartItemById($itemId) //function to get cart item by id
    {
        $cartItem = $this->cart[$itemId];
        if ($cartItem){
           return $cartItem;
        }
        return FALSE;
    }

    public function clearCart() //function to clear the cart
    {
        $this->cart = array('cart_total' => 0);
        $this->session->unset_userdata('cart_contents');
    }
}
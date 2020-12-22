<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Meal';
$route['add-pizza-to-cart'] = '/ShoppingCart/addPizzaToCart';
$route['add-non-pizza-to-cart'] = '/ShoppingCart/addNonPizzaToCart';
$route['add-deal-to-cart'] = '/ShoppingCart/addDealToCart';
$route['update-customized-pizza/(:any)'] = 'ShoppingCart/updateCustomizedPizza/$1';
$route['remove-from-cart/(:any)'] = '/ShoppingCart/removeItemFromCart/$1';
$route['cart'] = '/ShoppingCart';
$route['review-order'] = '/CartOrder';
$route['place-order'] = '/CartOrder/placeOrder';
$route['order'] = '/CartOrder/orderConfirmationPage';
$route['customize-pizza/(:any)'] = 'Customize/getPizza/$1';
$route['edit-customize-pizza/(:any)/(:any)'] = 'Customize/getCustomizedPizza/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

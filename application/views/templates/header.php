<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto:300,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
              crossorigin="anonymous">
        <title><?php echo $title; ?></title>
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/navbar.css">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: #0079ae">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <img src="<?php echo base_url()?>/images/logo.png" width="60px" height="60px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link nab-bar-btn" href="<?php echo base_url()?>#special-meal">Meal Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nab-bar-btn" href="<?php echo base_url()?>#pizzas">Pizzas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nab-bar-btn" href="<?php echo base_url()?>#sides">Sides</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nab-bar-btn" href="<?php echo base_url()?>index.php/cart">
                                Cart
<!--                                Total $--><?php //echo $this->cart->format_number($this->cart->total()); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container body-content">

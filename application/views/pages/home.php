<link rel="stylesheet" href="<?php echo base_url();?>/css/home.css">
<link rel="stylesheet" href="<?php echo base_url();?>/css/components.css">
<br>
<div id="special-meal" >
    <h2>Special Meal Deals</h2>
     <div class="card-deck">
        <?php
        foreach ($mealDeals->result() as $row)
        {?>
            <div class="card" style="min-width: 250px; max-width: 400px">
                <h5 class="card-title text-center"><?php echo $row->name;?></h5>
                <div class="card-body">
                    <img src="<?php echo base_url().$row->image;?>" class="card-img-top deal-image" alt="...">
                    <div class="description">
                        <p class="card-text">
                            <?php echo $row->description;?>
                        </p>
                    </div>
                    <input type="hidden" name="dealPrice" value="<?php echo $row->price;?>">
                    <input type="hidden" name="dealId" value="<?php echo $row->id;?>">
                    <input type="hidden" name="dealName" value="<?php echo $row->name;?>">
                    <input type="hidden" name="dealType" value="2">
                    <div class="deal-comp btn-section">
                        <div class="text-center deal-price">
                            Rs <?php echo $row->price;?>
                        </div>
                        <div class="text-center btn-add-deal">
                            <button type="button" name="add_deal" class="btn btn-primary deal-button" data-toggle="modal" data-target="#exampleModal">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<hr>
<!---------------------------------------pizza section---------------------------------------------------------------------------------------->
<div id="pizzas">
    <br>
    <h2>Pizzas</h2>
    <div class="card-deck">
        <?php
        foreach ($pizzas->result() as $row)
        {?>
            <div class="card" style="min-width: 250px; max-width: 400px">
            <h5 class="card-title text-center"><?php echo $row->name;?></h5>
                <div class="card-body">
                    <img src="<?php echo base_url().$row->image;?>" class="card-img-top pizza-image" alt="...">
                    <div class="pizza-description">
                        <p class="card-text ">
                            <?php echo $row->description;?>
                        </p>
                    </div>
                    <input type="hidden" name="mealId" value="<?php echo $row->id;?>">
                    <input type="hidden" name="mealName" value="<?php echo $row->name;?>">
                    <input type="hidden" name="mealType" value="1">
                    <div class="text-center pizza-btn-section">
                        <button
                                type="button"
                                name="customize"
                                onclick="window.location.href='<?php echo base_url()?>index.php/customize-pizza/<?php echo $row->slug;?>'"
                                class="btn btn-primary btn-add-pizza">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<hr>

<!-----------------------------------------------------sides----------------------------------------------------->

<div id="sides">
    <br>
    <h2>Sides</h2>
    <div class="card-deck">
        <?php
        foreach ($sides->result() as $row)
        {?>
            <div class="card" style="min-width: 250px; max-width: 400px">
                <h5 class="card-title text-center"><?php echo $row->name;?></h5>
                <div class="card-body">
                    <img src="<?php echo base_url().$row->image;?>" class="card-img-top side-image" alt="...">
                    <div class="text-center">
                        Rs <?php echo $row->price;?>
                    </div>
                    <div>
                        <div class="input-group side-inputs">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary change-qty-btn" type="button" name="side-decrease">-</button>
                            </div>
                            <input
                                    type="text"
                                    class="quantity"
                                    value="1"
                                    name="sideQty"
                                    readonly
                            >
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary change-qty-btn" type="button" name="side-increase">+</button>
                            </div>
                            <button type="button" name="add_side" class="btn btn-primary add-to-cart-btn" data-toggle="modal" data-target="#exampleModal">Add to cart</button>
                        </div>

                    </div>
                    <input type="hidden" name="sidePrice" value="<?php echo $row->price;?>">
                    <input type="hidden" name="sideId" value="<?php echo $row->id;?>">
                    <input type="hidden" name="sideName" value="<?php echo $row->name;?>">
                    <input type="hidden" name="sideType" value="2">
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                Added Successfully
            </div>
        </div>
    </div>
</div>

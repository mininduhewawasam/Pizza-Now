<link rel="stylesheet" href="<?php echo base_url();?>/css/customize.css">
<link rel="stylesheet" href="<?php echo base_url();?>/css/components.css">

<div class="row">
    <?php if (isset($pizza)){ ?>
            <div class="col-sm-6 pizza-details">
                <h2><?php echo $pizza->name; ?></h2>
                <br>
                <img src="<?php echo base_url().$pizza->image;?>" class="img-fluid">
                <br>
                <h3 id="total-pizza-price"><?php echo 'Total Rs '.$prices[1]->price?></h3>
                <div>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary change-qty-btn" type="button" name="decrease">-</button>
                        <input
                                type="text"
                                class="quantity"
                                value="1"
                                name="pizzaQty"
                                readonly
                        >
                        <button class="btn btn-outline-secondary change-qty-btn" type="button" name="increase">+</button>
                        <button type="button" name="add_cutomized_Pizza" class="btn btn-primary add-to-cart-btn">Add to cart</button>
                    </div>
                    <br>
                    <p>
                        <?php echo $pizza->description; ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 topping-details"><br>
                <h5>Choose the Size of Your Pizza Crust</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <?php foreach ($prices as $row) {?>
                        <label class="btn btn-secondary">
                            <input
                                    type="radio"
                                    name="price"
                                    id="<?php echo $row->size; ?>"
                                    value="<?php echo $row->price; ?>"
                                    <?php
                                    if ($row->size == 2) {
                                        echo 'checked';
                                    }
                                    ?>
                            >
                            <?php
                            if ($row->size == 1) {
                                echo 'Small';
                            }elseif ($row->size == 2) {
                                echo 'Medium';
                            }elseif ($row->size == 3) {
                                echo 'Large';
                            }
                            ?><br>
                            <?php echo "Rs ".number_format($row->price, 2, '.', ''); ?>
                        </label>
                    <?php } ?>
                </div>
                <br>
                <br>
                <h5>Choose Your Toppings</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="veg-tab" data-toggle="tab" href="#veg" role="tab" aria-controls="veg" aria-selected="true">Veg</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="non_veg-tab" data-toggle="tab" href="#non_veg" role="tab" aria-controls="non_veg" aria-selected="false">Non Veg</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="veg" role="tabpanel" aria-labelledby="veg-tab">
                        <ul class="list-group list-group-flush veg-toppings">
                            <?php foreach ($toppings as $row){?>
                                <?php
                                if ($row->type == 1) {
                                    ?>
                                    <li class="list-group-item veg-topping">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input
                                                    type="checkbox"
                                                    name="pizza_topping"
                                                    value="<?php echo $row->id;?>"
                                                    data-price="<?php echo $row->price;?>"
                                            >
                                            <?php echo $row->name;?>
                                        </label>
                                    </div>
                                <?php }?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="non_veg" role="tabpanel" aria-labelledby="non_veg-tab">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($toppings as $row){?>
                                <?php
                                if ($row->type == 2) {
                                    ?>
                                    <li class="list-group-item">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input
                                                    type="checkbox"
                                                    name="pizza_topping"
                                                    value="<?php echo $row->id;?>"
                                                    data-price="<?php echo $row->price;?>"
                                            >
                                            <?php echo $row->name;?>
                                        </label>
                                    </div>
                                <?php }?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="mealId" value="<?php echo $pizza->id;?>">
                <input type="hidden" name="mealName" value="<?php echo $pizza->name;?>">
                <input type="hidden" name="mealType" value="1">
            </div>
    <?php }?>
</div>

<link rel="stylesheet" href="<?php echo base_url();?>/css/components.css">
<div class="row">
    <div class="col-sm-9 cart-table">
        <link rel="stylesheet" href="<?php echo base_url();?>/css/cart.css">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
                <th>Meal</th>
                <th>Meal Description</th>
                <th>QTY</th>
                <th>Sub Total</th>
            </tr>
            <?php foreach ($cartItems as $cartItem): ?>
                <tr>
                    <input type="hidden" name="itemId" value="<?php echo $cartItem['itemId'];?>">
                    <td>
                        <div class="items-image">
                            <img src="<?php echo base_url().$cartItem['image']; ?>" height="80px" class="item-image">
                        </div>
                    </td>
                    <td class="cart-meal-desc">
                        <?php echo $cartItem['name']; ?>
                        <p>
                            <?php if (isset($cartItem['size'])):
                                if ($cartItem['size'] == 1) {
                                    echo 'small';
                                }elseif ($cartItem['size'] == 2) {
                                    echo 'medium';
                                }elseif ($cartItem['size'] == 3) {
                                    echo 'large';
                                }
                            endif; ?>
                        </p>
                        <p>
                            <?php if (isset($cartItem['toppingDetails'])): ?>
                                <?php echo implode(", ", $cartItem['toppingDetails']);?>
                            <?php endif; ?>
                        </p>
                    </td>
                    <td>
                        <?php echo $cartItem['qty']?>
                    </td>
                    <td>Rs <?php echo number_format($cartItem['subtotal'], 2, '.', ''); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    <div class="col-sm-3 oder details">
        <br>
        <h2>
            Total Rs <?php echo number_format($cartTotal, 2, '.', ''); ?>
        </h2>
        <br>
        <?php echo validation_errors()?>
        <form action="<?php echo base_url()?>index.php/place-order" method="post">
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" name="customerName" class="form-control" id="InputName">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="text" name="customerEmail" class="form-control" id="InputEmail" >
            </div>
            <div class="form-group">
                <label for="InputMobile">Mobile Number</label>
                <input type="text" name="customerMobile" class="form-control" id="InputMobile">
            </div>
            <div class="form-group">
                <label for="InputAddress">Delivery Address</label>
                <input type="text" name="customerAddress" class="form-control" id="InputAddress">
            </div>
            <button type="submit" class="btn btn-primary">PlaceOrder</button>
        </form>
    </div>
</div>
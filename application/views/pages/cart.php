<link rel="stylesheet" href="<?php echo base_url();?>/css/cart.css">
<link rel="stylesheet" href="<?php echo base_url();?>/css/components.css">
<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
    <tr>
        <th>Meal</th>
        <th>Meal Description</th>
        <th>QTY</th>
        <th>Sub Total</th>
        <th></th>
    </tr>
    <?php foreach ($cartItems as $cartItem): ?>
        <tr class="table-data">
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
            <td>
                <?php if ($cartItem['mealType']==1): ?>
                <button
                    type="button"
                    name="customize"
                    onclick="window.location.href='<?php echo base_url()?>index.php/edit-customize-pizza/<?php echo $cartItem['mealId'];?>/<?php echo $cartItem['itemId'];?>'"
                    class="btn btn-primary">
                    <i class='far fa-edit'></i>
                </button>
                <?php endif;?>
                <button type="button" name="remove-item" class="btn btn-primary"><i class='fas fa-times'></i></button>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td>
            <?php if ($cartItems):?>
                <button
                        type="button"
                        name="checkout-cart"
                        onclick="window.location.href='<?php echo base_url() ?>index.php/review-order'"
                        class="btn btn-primary">
                    Checkout cart
                </button>
            <?php endif;?>
        </td>
        <td colspan="4">
            <h2 style="float: right">
                Total Rs <?php echo number_format($cartTotal, 2, '.', ''); ?>
            </h2>
        </td>
    </tr>
</table>

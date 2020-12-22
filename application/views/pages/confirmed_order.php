<div class="row">
    <div class="col-sm-9 cart-table">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
                <th>Meal</th>
                <th>Meal Description</th>
                <th>QTY</th>
                <th>Sub Total</th>
            </tr>
            <?php if (isset($orderPizzas)){
                foreach ($orderPizzas as $orderPizza) {?>
                        <tr>
                            <td>
                                <div class="items-image">
                                    <img src="<?php echo base_url().$orderPizza['image']; ?>" height="80px" class="item-image">
                                </div>
                            </td>
                            <td>
                                <?php echo $orderPizza['name']; ?>
                                <br>
                                <?php if (isset($orderPizza['size'])) {
                                    if ($orderPizza['size'] == 1) {
                                        echo 'small';
                                    }elseif ($orderPizza['size'] == 2) {
                                        echo 'medium';
                                    }elseif ($orderPizza['size'] == 3) {
                                        echo 'large';
                                    }
                                } ?>
                                <br>
                                <?php echo implode(", ",$orderPizza['toppings']); ?>
                            </td>
                            <td><?php echo $orderPizza['quantity']; ?></td>
                            <td><?php echo $orderPizza['price']; ?></td>
                        </tr>
                    <?php
                }
            } ?>
            <?php if (isset($orderNonPizzas)){
                foreach ($orderNonPizzas as $orderNonPizza) {?>
                    <tr>
                        <td>
                            <div class="items-image">
                                <img src="<?php echo base_url().$orderNonPizza['image']; ?>" height="80px" class="item-image">
                            </div>
                        </td>
                        <td>
                            <?php echo $orderNonPizza['name']; ?>
                        </td>
                        <td><?php echo $orderNonPizza['quantity']; ?></td>
                        <td><?php echo $orderNonPizza['price']; ?></td>
                    </tr>
                    <?php
                }
            } ?>
            <?php if (isset($orderMealDeals)){
                foreach ($orderMealDeals as $orderMealDeal) {?>
                    <tr>
                        <td>
                            <div class="items-image">
                                <img src="<?php echo base_url().$orderMealDeal['image']; ?>" height="80px" class="item-image">
                            </div>
                        </td>
                        <td>
                            <?php echo $orderMealDeal['name']; ?>
                        </td>
                        <td>22</td>
                        <td><?php echo $orderMealDeal['price']; ?></td>
                    </tr>
                    <?php
                }
            } ?>
        </table>

    </div>
    <div class="col-sm-3 oder details">
        <br>
        <h2>
            Total Rs <?php echo number_format($order['orderTotal'], 2, '.', ''); ?>
        </h2>
        <br>
        <h5>Order will be delivered at</h5>
        <h4><?php echo $order['orderDeliveredAt']; ?></h4>

    </div>
</div>
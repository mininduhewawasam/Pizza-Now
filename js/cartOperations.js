let pizzaTotalPrice = 0;

$(document).ready(function(){
    //function to remove item
    $("button[name = 'remove-item']").click(function (){
        let itemId = $(this).closest(".table-data").find('input[name=itemId]').val();
        if (itemId) {
            $.ajax({
                url:"/coursework1/index.php/remove-from-cart/"+itemId,
                type:"POST",
                success: function (){
                    location.reload();
                }
            });
        }
    })

    //function to add customized pizza
    $("button[name ='add_cutomized_Pizza']").click(function(){
        let mealId = $('input[name=mealId]').val();
        let mealName = $("input[name = mealName]").val();
        let mealPrice = $("input[name = price]:checked").val();
        let mealSize= $("input[name = price]:checked").attr('id');
        let mealType= $("input[name = mealType]").val();
        let pizzaQty = $("input[name = pizzaQty]").val();
        let pizzaToppingPrices = $("input[name = pizza_topping]:checked").map(function (){
            return $(this).data("price");
        }).toArray();
        let pizzaToppingIds= $("input[name = pizza_topping]:checked").map(function (){
            return $(this).val()
        }).toArray();
        if (!mealPrice) {
            alert("please select the size of the custom Pizza");
        }else {
            $.ajax({
                url:"/coursework1/index.php/add-pizza-to-cart",
                type:"POST",
                data: {mealId, mealName, mealSize, mealType, pizzaToppingIds, pizzaQty},
                success: function (response){
                    window.location.href = "/coursework1";
                }
            });
        }
    });

    //function to update customized pizza
    $("button[name ='update_cutomized_Pizza']").click(function(){
        let mealId = $('input[name=mealId]').val();
        let mealName = $("input[name = mealName]").val();
        let mealPrice = $("input[name = price]:checked").val();
        let mealSize= $("input[name = price]:checked").attr('id');
        let mealType= $("input[name = mealType]").val();
        let itemId= $("input[name = itemId]").val();
        let pizzaQty = $("input[name = pizzaQty]").val();
        let pizzaToppingPrices = $("input[name = pizza_topping]:checked").map(function (){
            return $(this).data("price");
        }).toArray();
        let pizzaToppingIds= $("input[name = pizza_topping]:checked").map(function (){
            return $(this).val()
        }).toArray();
        if (!mealPrice) {
            alert("please select the size of the custom Pizza");
        }else {
            mealPrice=pizzaTotalPrice;
            $.ajax({
                url:"/coursework1/index.php/update-customized-pizza/"+itemId,
                type:"POST",
                data: {mealId, mealName, mealSize, mealType, pizzaToppingIds, pizzaQty},
                success: function (response){
                    window.location.href = "/coursework1/index.php/cart";
                }
            });
        }
    });

    //function to add side
    $("button[name ='add_side']").click(function(){
        let mealId = $(this).closest(".card").find('input[name=sideId]').val();
        let mealName = $(this).closest(".card").find("input[name = sideName]").val();
        let mealPrice = $(this).closest(".card").find("input[name = sidePrice]").val();
        let mealType= $(this).closest(".card").find("input[name = sideType]").val();
        let qty = $(this).closest(".card").find("input[name = sideQty]").val();
        $.ajax({
            url:"/coursework1/index.php/add-non-pizza-to-cart",
            type:"POST",
            data: { mealId, qty },
            success: function (response){
                $('#exampleModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })
            }
        });
        $(this).closest(".card").find('input[name=sideQty]').val(1);
        $('.btn-group button').removeClass('active');
        $("input[name = price]").button('dispose')
    });

    //function to add deal
    $("button[name ='add_deal']").click(function(){
        let mealId = $(this).closest(".card").find('input[name=dealId]').val();
        let mealName = $(this).closest(".card").find("input[name = dealName]").val();
        let mealPrice = $(this).closest(".card").find("input[name = dealPrice]").val();
        let mealType= $(this).closest(".card").find("input[name = dealType]").val();
        $.ajax({
            url:"/coursework1/index.php/add-deal-to-cart",
            type:"POST",
            data: {mealId, mealName, mealPrice, mealType},
            success: function (response){
                $('#exampleModal').on('shown.bs.modal', function () {
                    // $('#myInput').trigger('focus')
                })
            }
        });
        $('.btn-group button').removeClass('active');
        $("input[name = price]").button('dispose')
    });

    //function to add pizza toppings
    $("input[name='pizza_topping'], input[name = price]").change(function (){
        let pizzaToppingPrices = $("input[name = pizza_topping]:checked").map(function (){
            return $(this).data("price");
        }).toArray();
        let toppingTotal = 0;
        let mealPrice
        mealPrice = $("input[name = price]:checked").val();
        let qty = 1
        qty = $('input[name=pizzaQty]').val();
        if (!mealPrice) {
            alert("please select the size of the custom Pizza");
        }
        else {
            for (let i = 0; i < pizzaToppingPrices.length; i++) {
                toppingTotal += pizzaToppingPrices[i] << 0;
            }
            pizzaTotalPrice = (parseFloat(mealPrice) + toppingTotal)*parseFloat(qty);
            console.log(pizzaTotalPrice);
            $("#total-pizza-price").html('Total Rs '+pizzaTotalPrice.toFixed(2));
        }
    });


    $("button[name='decrease']").click(function (){
        let qty = $('input[name=pizzaQty]').val();
        if (qty>1) {
            qty = --qty;
            $('input[name=pizzaQty]').val(qty);
        }
    });

    $("button[name='increase']").click(function (){
        let qty = $('input[name=pizzaQty]').val();
        if (qty<20) {
            qty = ++qty;
            $('input[name=pizzaQty]').val(qty);
        }
    });

    $("button[name='decrease'], button[name='increase']").click(function (){
        let pizzaToppingPrices = $("input[name = pizza_topping]:checked").map(function (){
            return $(this).data("price");
        }).toArray();
        let toppingTotal = 0;
        let mealPrice = 0;
        mealPrice = $("input[name = price]:checked").val();
        let qty = 1
        qty = $('input[name=pizzaQty]').val();
        if (!mealPrice) {
            alert("please select the size of the custom Pizza");
        }
        else {
            for (let i = 0; i < pizzaToppingPrices.length; i++) {
                toppingTotal += pizzaToppingPrices[i] << 0;
            }
            pizzaTotalPrice = (parseFloat(mealPrice) + toppingTotal)*parseFloat(qty);
            $("#total-pizza-price").html('Total Rs '+pizzaTotalPrice.toFixed(2));
        }
    });

    $("button[name='side-decrease']").click(function (){
        let qty = $(this).closest(".card").find('input[name=sideQty]').val();
        if (qty>1) {
            qty = --qty;
            $(this).closest(".card").find('input[name=sideQty]').val(qty);
        }
    });

    $("button[name='side-increase']").click(function (){
        let qty = $(this).closest(".card").find('input[name=sideQty]').val();
        if (qty<20) {
            qty = ++qty;
            $(this).closest(".card").find('input[name=sideQty]').val(qty);
        }
    });
});

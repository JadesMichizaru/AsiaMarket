(function () {
    /*=======================
                UI Slider Range JS
    =========================*/
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 1000000,
        values: [$("#min_price").val(), $("#max_price").val()],
        slide: function (event, ui) {
            $("#amount").val(ui.values[0] + " - " + ui.values[1]);
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) +
        " - " + $("#slider-range").slider("values", 1));

    $('.delivery-address').change(function () {
        $('.courier-code').removeAttr('checked');
        $('.available-services').hide();
    });

    $('.courier-code').click(function () {
        let courier = $(this).val();
        let addressID = $('.delivery-address:checked').val();

        $.ajax({
            url: "/orders/shipping-fee",
            method: "POST",
            data: {
                address_id: addressID,
                courier: courier,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (result) {
                $('.available-services').show();
                $('.available-services').html(result);
            },
            error: function (e) {
                console.log(e);
            }
        })
    });

    const addToCartButton = document.getElementById("add-to-cart");
    const viewCartButton = document.getElementById("view-cart");

    let cart = [];

    addToCartButton.addEventListener("click", () => {
        const product = {
            id: 1,
            name: "Product 1",
            price: 1000,
            quantity: 1,
        };

        const existingItem = cart.find((item) => item.id === product.id);

        if (existingItem) {
            existingItem.quantity += product.quantity;
        } else {
            cart.push(product);
        }

        console.log(cart);
    });

    viewCartButton.addEventListener("click", () => {
        console.log(cart);
    });
});

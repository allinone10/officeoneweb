//Qty increament
function plusQty(fp_id)
{
    var token = $('#_token').val();
    var qty = $('#qty_' + fp_id).val();
    var new_qty = parseInt(qty) + 1;
    update_cart(fp_id, new_qty, token);
}

//Qty decreament
function minusQty(fp_id)
{
    var token = $('#_token').val();
    var qty = $('#qty_' + fp_id).val();
    if(qty > 1){
        var new_qty = parseInt(qty) - 1;
        update_cart(fp_id, new_qty, token);
    }
}

//Update cart
function update_cart(fp_id, qty, token)
{

    // Send updated qty using ajax
    $.ajax({
        url: "/update-cart-item",
        method: 'post',
        data: {'_token': token,'fp_id': fp_id, 'qty': qty},
        success: function(data){
            $('#qty_' + fp_id).val(qty);
            window.location.reload();
        }
    });
}

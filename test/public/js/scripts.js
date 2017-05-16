/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('#product_save').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $.ajax({
            url : '/product-create',
            type: 'post',
            dataType: 'json',
            data: $("#product_form").serialize(),
            success: function(response){
                var container = $("#product_data");
                container.append('<div class="row"><div class="col-md-4"><b>Product Name:</b></div><div class="col-md-8">'+response.name+'</div><div class="col-md-4"><b>Price:</b></div><div class="col-md-8">'+response.price+'</div><div class="col-md-4"><b>Quantity:</b></div><div class="col-md-8">'+response.quantity+'</div></div><br/>');
            }
        });
    });
});

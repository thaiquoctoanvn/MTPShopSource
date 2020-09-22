$(window).on('load', function ()  {
    
    var cart = [];
    var output = ""; //Xuất ra bảng trắng nếu session rỗng
    var totalofproductprice = 0;
    var shippingFee = 0;
    var allTotal = 0;
    
    var cipher = sessionStorage.getItem('shoppingCart');
    var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3cxz');
    var plaintext = bytes.toString(CryptoJS.enc.Utf8);
    console.log(plaintext);
    cart = JSON.parse(plaintext);
    // var cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    displayInvoice(cart, output, totalofproductprice, shippingFee, allTotal);

    $('.product-item').on("click", ".delete-item", function(event){
        var button = $(this);
        var id = button.attr('data-id');
        for(var i in cart){
            if(cart[i].id === id){
                cart.splice(i, 1);
                break;
            }
        }
        var cartInfo = JSON.stringify(cart);
        var ciphertext = CryptoJS.AES.encrypt(cartInfo, '3cxz');
        sessionStorage.setItem('shoppingCart', ciphertext);
        // sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
        displayInvoice(cart, output, totalofproductprice, shippingFee, allTotal);
    });

    /*$('.custom-btn-order').click(function(){
        var data = sessionStorage.getItem('shoppingCart');
        location.replace("http://localhost:88/ProjectWeb/Chitietsanpham/InsertOrder/"+data);
    });*/
    $('.product-item').on("change", ".item-count", function(event) {
        var button = $(this);
        var id = button.attr('data-id');
        var count = Number($(this).val());
        for(var i in cart) {
            if (cart[i].id === id) {
              cart[i].count = count;
              break;
            }
        }
        var cartInfo = JSON.stringify(cart);
        var ciphertext = CryptoJS.AES.encrypt(cartInfo, '3cxz');
        sessionStorage.setItem('shoppingCart', ciphertext);
        // sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
        displayInvoice(cart, output, totalofproductprice, shippingFee, allTotal);
      });
});


function displayInvoice(cart, output, totalofproductprice, shippingFee, allTotal){
    
    if(cart.length==0){
        output += "<tr>"
        +"<td>Chưa có sản phẩm</td>"
        +"<tr>";
        $('.product-item').html(output);
    }
    for(var item in cart){
        // $.ajax({
        //     type: 'post',
        //     url: './public/EditDB/getprice.php',
        //     data: {
        //         Id: cart[item].id
        //     },
            
        //     success: function (response) {
        //         var obj = JSON.parse(response);
        //         priceperone = parseFloat(obj.Price);
        //         console.log(priceperone);
                
        //     }
        // });
        var price = currencyFormatDE(cart[item].price);
        // alert(price);
        output += "<tr>"
        +"<td><img src='https://mtpshop.000webhostapp.com/AdminWeb/admin"+cart[item].img+"' style='width:50px;height:50px;object-fit: cover;'/> </td>"
        +"<td class='name'>"+cart[item].name+"</td>"
        +"<td>Còn hàng</td>"
        
        +"<td class='quantity'><input style='width: auto' type='number' class='item-count form-control' data-id='" + cart[item].id + "' value='" + cart[item].count + "'></td>"
        +"<td class='text-left'>"+price+"</td>"
        +"<td class='text-right'><button class='delete-item btn btn-sm btn-danger' data-id=" +cart[item].id +"><i class='fa fa-trash'></i> </button> </td>"
        +"<tr>";
        totalofproductprice += cart[item].price * cart[item].count;
        //alert(totalofproductprice);
        $('.product-item').html(output);
      
    }
    
    $('.total-of-product-price').text(currencyFormatDE(totalofproductprice));
    $('.shipping-fee').text(currencyFormatDE(shippingFee));
    $('.all-total').text(currencyFormatDE(allTotal));
}

function currencyFormatDE(num) {
    return (
      num
        .toFixed(2) // always two decimal digits
        .replace('.', ',') // replace decimal point character with ,
        .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + '  VND'
    ) // use . as a separator
  }



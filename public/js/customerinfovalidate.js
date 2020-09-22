$(document).ready(function () {
    $("#customer-info").validate({
        rules: {
            name:{
                minlength: 4,
                required: true  
              },
              phone:{
                required: true,
                number : true,
                minlength: 4
              },
              address:{
                required: true
              }
        },
        messages: {
            name: {
                minlength: "Xin nhập tên đầy đủ",
                required: "Vui lòng nhập tên của bạn"
            },
            phone: {
                required: "Nhập sđt để chúng tôi có thể liên hệ",
                number: "Số điện thoại sai định dạng",
                minlength: "Phải ít nhất là 10 số"
            },
            address: {
                required: "Nhập địa chỉ được để giao hàng"
            }
        }
        
    
    });
    function customer(name,phone,add,note,method) {
            this.name = name;
            this.phone = phone;
            this.add = add;
            this.note = note;
            this.method = method;
}
    $('.custom-btn-order').click(function (e) { 
        e.preventDefault();
                    console.log("đã nhấn");
        // alert('Clicked');
        $cusName = $('#cusName').val();
        $cusPhone = $('#cusPhone').val();
        $cusAdd = $('#cusAdd').val();
        $cusNote = $('textarea#notes').val();
        $total = $('.total-of-product-price').text();
  
        $payingMethod = "";
        if ($('#cash').prop("checked")) {
            $payingMethod = "Tiền mặt";
         } else if($('#transfer').prop("checked")) {
            $payingMethod = "Chuyển khoản";
         }
        alert($cusName);
         
        
        sessionStorage.setItem('customerInfo',JSON.stringify(new customer($cusName,$cusPhone,$cusAdd,$cusNote,$payingMethod)));


        var cipher = sessionStorage.getItem('shoppingCart');
        var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3cxz');
        var plaintext = bytes.toString(CryptoJS.enc.Utf8);
        cart = JSON.parse(plaintext);
        console.log(cart);
        
        // // var cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
        // Luu thong tin KH da dat. de giao hangf
        if($cusName != "" && $cusPhone != "" && $cusAdd != "") {
            $.ajax({
                type: 'POST',
                url: './public/EditDB/insertorder.php',
                data: {
                    nameCustomer: $cusName,
                    phoneCustomer: $cusPhone,
                    addressCustomer: $cusAdd,
                    note: $cusNote,
                    total: $total,
                    Status: 0,
                },
                success: function (response) {
                    // alert(response);
                },
                error: function (param) {
                    alert('err' + param);
                },
            });
            // Láy thông tin sp đưa vào TBL DETAIL               
            for (var i in cart) {
                $.ajax({
                    type: 'POST',
                    url: './public/EditDB/insert_order_detail.php',
                    data: {
                        IdProduct:cart[i].id,
                        NameProduct:cart[i].name,
                        Quantity:cart[i].count,
                        Price:cart[i].price,
                        Image:cart[i].img,
                    },
                    success: function (response) {
                       

                if(confirm("bạn có chắc là mua sản phẩm này chứ?")){
                       window.location.replace("https://mtpmtp.000webhostapp.com/Bill");
                          }else {
                             return false;
                }
             
          
                       
                    },
                    error: function (param) {
                        alert('err' + param);
                    },
                });
            }
        } else {
            alert('Vui lòng nhập tên, số điện thoại và địa chỉ của bạn');
        }
    
    });
    $('.custom-btn-back').click(function (e) { 
        e.preventDefault();
        window.location.replace("https://mtpmtp.000webhostapp.com/Home");
    });
});
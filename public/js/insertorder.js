// $(document).ready(function () {
//     $(".custom-btn-order").click(function (e) { 
//         e.preventDefault();
        
//         var cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
        
//         for(var i in cart) {
//             $.ajax({
//                 type: 'POST',
//                 url: './public/EditDB/insertorder.php',
//                 data: {
                    
//                     IdProduct:cart[i].id,
//                     NameProduct:cart[i].name,
//                     IdCustomer:10,
//                     Quantity:cart[i].count,
//                     Price:cart[i].price,
//                     Image:cart[i].img,
//                     Status:1,
//                 },
//                 success: function (response) {
//                     alert(response);
//                 },
//                 error: function (param) {
//                     alert('err'+param);
//                 },
                
//             });
//             alert(cart[i].name);
//         }
//         //alert('Hi');
//     });
// });


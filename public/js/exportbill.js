$(document).ready(function () {
    var customerInfo = JSON.parse(sessionStorage.getItem('customerInfo'));
    $('.cus-name').text(customerInfo.name);
    $('.cus-phone').text(customerInfo.phone);
    $('.cus-address').text(customerInfo.add);
    $('.cus-note').text(customerInfo.note);
    $('.cus-method').text(customerInfo.method);

    

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = dd + '/' + mm + '/' + yyyy;
    
    $('.custom-order-date').text(today);

    $('.custom-btn-back-home').click(function(e){
        sessionStorage.removeItem('shoppingCart');
        window.location.replace("https://mtpmtp.000webhostapp.com/Home");
        alert('Hi');
    });
    
});
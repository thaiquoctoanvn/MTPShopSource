$(document).ready(function () {
    $('.brand-item').click(function (e) { 
        e.preventDefault();
        var brandItem = $(this);
        var id = brandItem.attr('data-id-brand');
        if(id == 1) {
            window.location.replace("https://mtpmtp.000webhostapp.com/Bama");
        } else if(id == 2) {
            window.location.replace("https://mtpmtp.000webhostapp.com/SgSwagger");
        } else if(id == 3) {
            window.location.replace("https://mtpmtp.000webhostapp.com/BirdyBag");
        } else {
            window.location.replace("https://mtpmtp.000webhostapp.com/Wiinhouse");
        }
    });
    
});
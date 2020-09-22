$(document).ready(function () {
    $('.btn-searching').click(function (e) { 
        e.preventDefault();
         var nameSP = $('.input-searching').val();
         
         $.ajax({
            type: 'post',
            url: './public/EditDB/searchresult.php',
            data: {
                productName:nameSP,
            },
                
            
            success: function (response) {
                console.log("alo");
                window.location.replace("https://mtpmtp.000webhostapp.com/Search/SayHi/"+nameSP);
                if(response == "found") {
                  
                } else {
                    
                    console.log("alo");
                    $('.search-result').hide();
                   //$('#shoppe-search-result').css("display","block");
                   // $('.shopee-search-empty-result-section').css("display","block");
                  
                    
                   
                }
            }
        });
        
   
        //  
       	
    });
});
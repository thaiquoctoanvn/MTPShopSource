$(document).ready(function () {
    $('.login-btn').click(function (e) { 
        e.preventDefault();
        var email = $('#ip-email').val();
        var password = $('#ip-password').val();
        
        $.ajax({
            type: 'POST',
            url: './public/EditDB/login.php',
            data: {
                Email:email,
                Password:password
            },
            
            success: function (response) {
                window.location.replace('https://mtpmtp.000webhostapp.com/');
            }
        });
    });
});
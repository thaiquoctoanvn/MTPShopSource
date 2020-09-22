$(document).ready(function () {
    $('#btn-signup').click(function (e) { 
        e.preventDefault();
        var username = $('.username-sg').val();
        var name = $('.name-sg').val();
        var mail = $('.email-sg').val();
        var phone = $('.phone-sg').val();
        var pass = $('.password-sg').val();
        var repass = $('.confirm-password-sg').val();
        if(username != "" && mail != "" && pass != "" && repass == pass) {
            $.ajax({
                type: 'POST',
                url: './public/EditDB/signup.php',
                data: {
                    Username:username,
                    Name:name,
                    Email:mail,
                    Phone:phone,
                    Password:pass
                },
                
                success: function (response) {
                    //alert(response);
                    if(response == "sign-up-ok") {
                        alert('Đăng ký thành công, hãy đăng nhập lại');
                        window.location.replace("https://mtpmtp.000webhostapp.com/Login");
                    } else {
                        alert(response);
                    } 
                },
                error: function (param) {
                    alert(param);
                },
            });
            
        } else {
            alert('Kiểm tra lại username hoặc email hoặc password');
        }
        
    });
});
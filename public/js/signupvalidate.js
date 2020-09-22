$(document).ready(function() {
    $('.signup_btn').click(function (e) { 
        e.preventDefault();
        var username = $('.username-sg').val();
        var name = $('.name-sg').val();
        var mail = $('.email-sg').val();
        var phone = $('.phone-sg').val();
        var pass = $('.password-sg').val();
        var repass = $('.confirm-password-sg').val();
        
        if(username != "" && mail != "" && pass != "" && repass == pass) {
            $.ajax({
                type: 'post',
                url: './public/EditDB/signup.php',
                data: {
                    Username:username,
                    Name:name,
                    Phone:phone,
                    Email:mail,
                    Password:pass
                },
                
                success: function (response) {
                    
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
            alert('Kiểm tra lại username hoặc email hoặc password và confirm password');
        }
    });
    
    $("#my-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                minlength:4,
                number : true
            },
            password: {
                required: true,
                minlength: 4
            },
            // confirm_password: {
            //     required: true,
            //     equalTo: "#password"
            // },
        },
        messages: {
            username: {
                required: "* Vui lòng nhập username",
                minlength: "* Tối thiếu 8 ký tự"
            },
            email: {
                required: "* Vui lòng nhập email",
                email: "* Phải nhập đúng định dạng email"
            },
            phone: {
                minlength:"Vui lòng nhập ít nhất 10 số ",
                number:"Không đúng định dạng"
            },
            password: {
                required: "* Vui lòng nhập password",
                minlength: "* Pass phải có ít nhất 8 ký tự"
            },
            // confirm_password: {
            //     required: "* Vui lòng nhập lại password",
            //     equalTo: "* Vui lòng nhập đúng mật khẩu"
            // }
        }
    });
});
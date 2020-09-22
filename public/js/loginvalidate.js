$(document).ready(function() {
    $('.login_btn').click(function() {
        var btn = $(this);
        function User(id, username, name, mail, pass) {
            this.id = id;
            this.username = username;
            this.name = name;
            this.mail = mail;
        };
        var email = $(".email-lg").val();
        var password = $(".password-lg").val();
        if(email == "" || password == "") {
            btn.closest('form').submit();
            alert('Chưa nhập email và pass')
        } else {
            
            $.ajax({
                type: 'post',
                url: './public/EditDB/login.php',
                data: {
                    Email:email,
                    Password:password
                },
                    
                
                success: function (response) {
                    
                    if(response == "account-not-existed") {
                        alert('Tài khoản không tồn tại');
                    } else {
                        var obj = JSON.parse(response);
                        var name = obj.Name;
                        alert("Xin chào " + name);
                        
                        // var user = new User(obj.Id, obj.Username, obj.Name, obj.Email);
                        var user = JSON.stringify(new User(obj.Id, obj.Username, obj.Name, obj.Email));
                        var ciphertext = CryptoJS.AES.encrypt(user, '3dsa');
                        sessionStorage.setItem('userInfo', ciphertext);
                        
                        window.location.replace('https://mtpmtp.000webhostapp.com/');
                    }
                }
            });
        }
        
    });
    $("#login-form").validate({
        rules: {
            emaill:{
                email: true,
                required: true  
              },
            passwordd:{
                required: true
              }
        },
        messages: {
            emaill: {
                email: "Email sai định dạng",
                required: "Vui lòng nhập email của bạn"
            },
            passwordd: {
                required: "Vui lòng nhập password"
            }
        }
    });
});
$(document).ready(function() {
   $("#edit-form").validate({
        rules: {
            email:{
                required: true,
                email: true
              },
              phone:{
                required: true,
                number : true,
                minlength: 4
              },
              
        },
        messages: {
             email: {
                required: "* Vui lòng nhập email",
                email: "* Phải nhập đúng định dạng email"
            },
            phone: {
                required: "Nhập sđt để chúng tôi có thể liên hệ",
                number: "Số điện thoại sai định dạng",
                minlength: "Phải ít nhất là 10 số"
            },
          
        }
    });
    $("#pass-form").validate({
        rules: {
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            },
              
        },
        messages: {
              password: {
                required: "* Vui lòng nhập password",
                minlength: "* Pass phải có ít nhất 6 ký tự"
            },
            confirm_password: {
                required: "* Vui lòng nhập lại password",
                equalTo: "* Vui lòng nhập đúng mật khẩu"
            }
          
        }
    });
   var cipher = sessionStorage.getItem('userInfo');
      if(cipher != null) {
            var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3dsa');
            var plaintext = bytes.toString(CryptoJS.enc.Utf8);
            var obj = JSON.parse(plaintext);
            console.log(obj.id);

          }
    $('.edit-pass').click(function (e) { 
        window.location.replace("http://mtpmtp/ProjectWeb/EditPassword/User/"+obj.id);
     
});
        $('.back-profile-btn').click(function (e) { 
        window.location.replace("http://mtpmtp/ProjectWeb/Profile/User/"+obj.id);
     
});
     $('.confirm-btn').click(function (e) { 
        e.preventDefault();
        
        var mail = $('.email-sg').val();
        var phone = $('.phone-sg').val();
        var id = obj.id;
        alert(id);
        if(confirm("Bạn có chắc thay đổi thông tin trên?")) {
             if(mail !="" && phone !=""){
            $.ajax({
                type: 'post',
                url: '../../public/EditDB/editprofile.php',
                data: {
                   
                    Phone:phone,
                    Email:mail,
                    ID:id,
                },
                 
                success: function (response) {
                    console.log(response);
                    if(response == "edit-ok") {

                        alert('Cập nhật thành công');
                        window.location.replace("http://mtpmtp.000webhostapp.com/ProjectWeb/Profile/User/"+obj.id);
                    } else {
                        alert(response);
                    }
                },
                error: function (param) {

                    alert(param);
                },
                
            });
             }else{
                alert('Kiểm tra lại mail và số điện thoại');
            }
        } else {
            return false;
        }
    });
      $('.changepassword-btn').click(function (e) { 
        e.preventDefault();
        
        var password = $('.password-sg').val();
        var confirmpass = $('.confirm-password-sg').val();
        var id = obj.id;
        if(confirm("Bạn có chắc thay đổi thông tin trên?")) {
            if(password !=""){
            $.ajax({
                type: 'post',
                url: '../../public/EditDB/editpassword.php',
                data: {
                   
                    Password:password,
                    ID:id,
                },
                 
                success: function (response) {
                    console.log(response);
                    if(response == "edit-ok") {

                        alert('Cập nhật thành công');
                        window.location.replace("http://mtpmtp.000webhostapp.com/ProjectWeb/Profile/User/"+obj.id);
                    } else {
                        alert(response);
                    }
                },
                error: function (param) {

                    alert(param);
                },
                
            });
             }else{
                alert('Kiểm tra lại password và confirm password');
            }
        } else {
            return false;
        }
    });
})
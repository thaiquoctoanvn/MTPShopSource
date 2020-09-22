$(document).ready(function () {
    var cw = $('.custom_col_image').width();
    var cipher = sessionStorage.getItem('userInfo');
        if(cipher != null) {
                var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3dsa');
                var plaintext = bytes.toString(CryptoJS.enc.Utf8);
                var obj = JSON.parse(plaintext);
                console.log(obj.id);

            }
    $('.custom_col_image').css({'height':cw+'px'});
    var cipher = sessionStorage.getItem('userInfo');
    if(cipher != null) {
        var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3dsa');
        var plaintext = bytes.toString(CryptoJS.enc.Utf8);
        var check = JSON.parse(plaintext);
        // alert('Xin chào ' + check.name);
            $('.da-dang-nhap').html(check.name +' <i class="fa fa-angle-down" aria-hidden="true"></i>');
            
            $('.da-dang-nhap').hover(function () {
                // over
                $('.custom-account-function').show();
                    
            }, function () {
                // out
                // $('.custom-account-function').hide();
            }
        );
    } else {
        // alert('Chưa đăng nhập');
        $('.da-dang-nhap').hover(function () {
            // over
            $('.custom-account-function').hide();
                
            }, function () {
            // out
            $('.custom-account-function').hide();
            }
        );
    }

    //Nếu chưa đăng nhập, click vào sẽ nhảy qua trang đăng nhập
    $('.custom-login').click(function (e) { 
        e.preventDefault();
        if(cipher == null) {
            window.location.replace("http://mtpmtp.000webhostapp.com/Login");
        } else {
            //Nếu đăng nhập rồi, click vào sẽ nhảy qua trang thông tin khách hàng
              window.location.replace("http://mtpmtp.000webhostapp.com/Profile/User/"+obj.id);
        }
        
    });
    $('.custom-logout').click(function (e) { 
        e.preventDefault();
        sessionStorage.removeItem("userInfo");
        window.location.replace("http://mtpmtp.000webhostapp.com");
    });

    // Hiệu ứng số lượng cho biểu tượng giỏ hàng
    $(function(){
        $('.navbar-nav a.nav-link').filter(function(){
          return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');
            $('.navbar-nav a.nav-link').click(function(){
                $(this).parent().addClass('active').siblings().removeClass('active');   
            })
      })
});
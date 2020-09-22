<!DOCTYPE html>
<html>

<head>
  <title>Chi tiết sản phẩm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/profile.css" />
  <link rel="stylesheet" href="../../public/css/footer.css" />
  <link rel="stylesheet" href="../../public/css/menustyle.css" />
  <link rel="stylesheet" href="../../public/css/signupview.css">



</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu2.php" ?>
  <div class="container h-100 custom-login-card">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="../../public/img/profile.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form name="my-form" id="my-form" class="custom-form-margin">
                   
                              <?php
          while ($row = mysqli_fetch_array($data["user"])) {
          ?>
            <div class="form-group">
               <!--<label>Username</label>-->
                            <p>Khách hàng: </p>
                            <input name="username" type="text" class="form-control input_user required username-sg" placeholder="<?php echo $row["nameCustomer"]; ?>" disabled >
            </div>
                    
            
            <div class="form-group">
                            <!--<label>Email</label>-->
                            <p>Email<p>

                            <input name="email" type="text" class="form-control input_pass required email-sg" placeholder="<?php echo $row["nameCustomer"]; ?>" disabled>
            </div>
            <div class="form-group">
                            <p>Số điện thoại:<p>

                            <!--<label>Số Điện Thoại</label>-->
                            <input name="phone" type="text" class="form-control input_pass phone-sg" placeholder="<?php echo $row["nameCustomer"]; ?>"disabled>
                        </div>
            
         
                                   <?php
          }
          ?>
                             
            
         
            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="button" name="button" class="btn edit-btn"> Chỉnh sửa</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 <?php require_once "./mvc/views/blocks/Footer.php" ?>


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script language="javascript" src="../../public/js/cart.js"></script>
  <script language="javascript" src="../../public/js/checkuserlogin.js"></script>
  <script language="javascript" src="../../public/js/exportbill.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
   var cipher = sessionStorage.getItem('userInfo');
      if(cipher != null) {
            var bytes = CryptoJS.AES.decrypt(cipher.toString(), '3dsa');
            var plaintext = bytes.toString(CryptoJS.enc.Utf8);
            var obj = JSON.parse(plaintext);

          }
      
        $('.edit-btn').click(function (e) {         
              window.location.replace("http://mtpshop.000webhostapp.com/EditProfile/User/"+obj.id);
        }) 
                     
})
</script>
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

  <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>

</html>
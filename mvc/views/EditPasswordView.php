<!DOCTYPE html>
<html>

<head>
  <title>Chỉnh sửa thông tin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/profile.css" />
  <link rel="stylesheet" href="../../public/css/footer.css" />
    <link rel="stylesheet" href="../../public/css/signupview.css">

  <link rel="stylesheet" href="../../public/css/menustyle.css" />

<style>
    label.error {
        display: block;
        color: crimson;
        width: 85%;
        margin-left: 0 !important;
        padding-bottom: 5px;
    }
</style>

</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu2.php" ?>
 <div class="container h-100 custom-login-card">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="../../public/img/edit.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form name="my-form" id="pass-form" class="custom-form-margin">
       
                     
    
            
            <div class="form-group">
                           
                            <p>Password mới:<p>

                           <input name="password" type="password" class="form-control input_pass required password-sg" id="password" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                            <p>Nhập lại password:<p>

                    
                           <input name="confirm_password" type="password" class="form-control input_pass confirm-password-sg" placeholder="Nhập lại mật khẩu">
             

         
            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="button" name="button" class="btn changepassword-btn">Cập nhật</button>
            </div>
                 <div class="d-flex justify-content-center mt-3 login_container">
              <button type="button" name="button" class="btn back-profile-btn">Quay lại</button>
             
            </div>
          </form>
        </div>  
              </div>
      </div>
    </div>
  </div>

  <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>
  <?php require_once "./mvc/views/blocks/Footer.php" ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


  <script language="javascript" src="../../public/js/profile.js"></script>
    <script language="javascript" src="../../public/js/signupvalidate.js"></script>
 





</body>

  
</html>
<!DOCTYPE html>
<html>

<head>
	<title> Đăng nhập </title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./public/css/loginview.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<style>
    label.error {
        display: block;
        color: crimson;
        width: 85%;
        margin-left: 0 !important;
        padding-bottom: 5px;
    }
</style>
<body>
	<?php require_once "./mvc/views/blocks/Menu.php" ?>
	<div class="container h-100 custom-login-card">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./public/img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="login-form" id="login-form" value="Validate">
						
						<div class="form-group">
                                <!--<label>Tên Đầy Đủ</label>-->
                                <input name="emaill" type="text" class="form-control input_user required email-lg" placeholder="Email" id="full-name">
                            </div>
                            <div class="form-group">
                                <!--<label>Số Điện Thoại</label>-->
                                <input name="passwordd" type="password" class="form-control input_pass required password-lg" placeholder="Password" id="tel-number">
                            </div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="button" name="button" class="btn login_btn">Login</button>
						</div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="https://mtpmtp.000webhostapp.com/SignUp" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "./mvc/views/blocks/Footer.php" ?>

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
	<script language="javascript" src="./public/js/checkuserlogin.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	  
	<script language="javascript" src="./public/js/loginvalidate.js"></script>
</html>
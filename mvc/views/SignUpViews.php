<!DOCTYPE html>
<html>

<head>
	<title> Đăng ký </title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./public/css/signupview.css">
	
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
					<form name="my-form" id="my-form" class="custom-form-margin">
						<div class="form-group">
                            <!--<label>Username</label>-->
                            <input name="username" type="text" class="form-control input_user required username-sg" placeholder="Tên người dùng">
                        </div>
                        <div class="form-group">
                            <!--<label>Full name</label>-->
                            <input name="name" type="text" class="form-control input_pass required name-sg" placeholder="Tên đầy đủ">
                        </div>
						
						<div class="form-group">
                            <!--<label>Email</label>-->
                            <input name="email" type="text" class="form-control input_pass required email-sg" placeholder="Email">
						</div>
						<div class="form-group">
                            <!--<label>Số Điện Thoại</label>-->
                            <input name="phone" type="text" class="form-control input_pass phone-sg" placeholder="Số điện thoại">
                        </div>
						
						<div class="form-group">
                            <!--<label>Password</label>-->
                            <input name="password" type="password" class="form-control input_pass required password-sg" placeholder="Mật khẩu">
						</div>
						<div class="form-group">
                            <!--<label>Confirm password</label>-->
                            <input name="confirm_password" type="password" class="form-control input_pass confirm-password-sg" placeholder="Nhập lại mật khẩu">
                        </div>
						

						<p>* Require field</p>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="button" name="button" class="btn signup_btn">Sign up</button>
						</div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Đã có tài khoản? Đăng nhập ngay <a href="https://mtpmtp.000webhostapp.com/Login" class="ml-2">Login</a>
					</div>
					<!-- <div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once "./mvc/views/blocks/Footer.php" ?>

	
  	
</body>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> nguyên nhân khiến ajax hay bị lỗi-->
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	  
	<script language="javascript" src="./public/js/signupvalidate.js"></script>
</html>
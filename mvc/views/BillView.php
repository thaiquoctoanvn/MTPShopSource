<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/bill.css" />
	<title>Hóa đơn</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="invoice-title">
					<h2>Đơn Đặt Hàng</h2>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6">
						<address>
							<p class="custom-title"><strong>Khách hàng: </strong><span class="cus-name">Name</span></p>
							<p class="custom-title"><strong>Số điện thoại: </strong><span class="cus-phone">0911</span></p>
							<p class="custom-title"><strong>Giao tới địa chỉ: </strong><span class="cus-address">Quận Phú Nhuận</span></p>
							<p class="custom-title"><strong>Ghi chú: </strong><span class="cus-note">Không có</span></p>
							<p class="custom-title"><strong>Phương thức thanh toán: </strong><span class="cus-method">Tiền mặt</span></p>

						</address>
					</div>
					<div class="col-xs-6 text-right">
						<address>
							<strong>Cảm Ơn Bạn Đã Mua Hàng</strong><br>
							<p class="custom-title">MTP shop</p>
							<p class="custom-title">0911</p>
							<p class="custom-title">720 Điện Biên Phủ, Bình Thạnh, TPHCM</p>
							<p class="custom-title">mtp@gmail.com</p>

						</address>
					</div>
				</div>
				<div class="row">

					<div class="col-xs-6">
						<address>
							<strong>Ngày đặt hàng:<span class="custom-order-date">01/07/2019</span></strong>
						</address>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Sản phẩm đã đặt</strong></h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th scope="col"> </th>
										<th class="custom-name" scope="col">Sản phẩm</th>
										<th scope="col">Tình trạng</th>
										<th class="custom-quantity" scope="col" class="text-center">Số lượng</th>
										<th class="custom-price" scope="col" class="text-right">Giá</th>
										<th> </th>
									</tr>
								</thead>
								<tbody class="product-item">


								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button class="btn-paying btn btn-lg btn-block btn-success text-uppercase custom-btn-back-home">Trang chủ</button>
            </div>
		</div>
	</div>
	<?php require_once "./mvc/views/blocks/Footer.php" ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
	<script language="javascript" src="./public/js/checkuserlogin.js"></script>

	<script language="javascript" src="./public/js/insertorder.js"></script>
	<script language="javascript" src="./public/js/order.js"></script>

	<script language="javascript" src="./public/js/payingdescryption.js"></script>
	<script language="javascript" src="./public/js/customerinfovalidate.js"></script>
	<script language="javascript" src="./public/js/exportbill.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Thanh Toán </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/thanhtoanview.css" />

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

</head>

<style>
    label.error {
        display: block;
        color: crimson;
        width: 80%;
        margin-left: 0 !important;
        padding-bottom: 5px;
    }
</style>

<body>

    <?php require_once "./mvc/views/blocks/Menu.php" ?>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tổng tiền sản phẩm</td>
                            <td>
                                <p class="total-of-product-price text-right"></p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Phí vận chuyển</td>
                            <td class="shipping-fee text-right"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Tổng cộng (gồm phí ship)</strong></td>
                            <td class="all-total text-right"><strong></strong></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--Thông tin mua hàng-->
            <div class="col-12 custom-paying">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <!--Thông tin mua hàng-->
                        <h4>Thông tin thanh toán</h2>
                        <form id="customer-info">
                                <div class="form-group">
                                    <!--<label>Tên Đầy Đủ</label>-->
                                    <input id="cusName" name="name" type="text" class="form-control" placeholder="Tên đầy đủ" id="full-name">
                                </div>
                                <div class="form-group">
                                    <!--<label>Số Điện Thoại</label>-->
                                    <input id="cusPhone" name="phone" type="text" class="form-control" placeholder="0900xxxxx" id="tel-number">
                                </div>
                                <div class="form-group">
                                    <!--<label>Email</label>-->
                                    <input id="cusMail" name="email" type="email" class="form-control" placeholder="themtp@gmail.com" id="mail">
                                </div>
                                <div class="form-group">
                                    <div class="row ">
                                        <!--<label>Địa Chỉ</label>-->
                                        <div class="col-md-12 col-sm-12 col-12 custom-input-address">
                                            <input id="cusAdd" name="address" type="text" class="form-control" placeholder="720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, TPHCM" id="address">
                                        </div>
                                        <!-- <div class="col-md-6 col-sm-6 col-6 custom-dropdown-address">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle custom-btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tỉnh/Thành phố
                                                </button>
                                                <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Quảng Ninh</a>
                                                    <a class="dropdown-item" href="#">Quảng Bình</a>
                                                    <a class="dropdown-item" href="#">Bình Thuận</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                </div>

                                <div class="form-group">
                                    <!--<label for="exampleFormControlTextarea1">Ghi Chú</label>-->
                                    <textarea id="notes" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lưu ý khi giao hàng"></textarea>
                                </div>

                                <!-- <div class="col mb-2">
                                    <div class="row custom-btn">
                                        <div class="col-sm-12  col-md-6">
                                            <button class="btn btn-block btn-light">Tiếp tục mua sắm</button>
                                        </div>
                                        <div class="col-sm-12 col-md-6 text-right">
                                            <button class="btn-paying btn btn-lg btn-block btn-success text-uppercase custom-btn-order">Thanh toán</button>
                                        </div>
                                    </div>
                                </div> -->
                            </form>
                    </div>
                    <div class="col-sm-12 col-md-6 custom-paying-option">
                        <!--Phương thức thanh toán-->
                        <h4>Phương thức thanh toán</h2>
                        <div class="form-check radio-option">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="cash" value="option1" checked>
                            <label class="form-check-label custom-cash-note" for="exampleRadios1">
                                Thanh toán khi nhận hàng 
                            </label>
                            <p class="cash-note">* Bạn sẽ phải trả tổng thanh toán, chỉ áp dụng trên lãnh thổ Việt Nam</p>
                        </div>
                        <div class="form-check radio-option">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="transfer" value="option2">
                            <label class="form-check-label custom-transfer-note" for="exampleRadios2">
                                Chuyển khoản
                            </label>
                            <p class="transfer-note">* Bạn sẽ phải chuyển khoản trước cho chúng tôi, bao gồm tổng thanh toán và phí chuyển khoản sau khi xác nhận thanh toán đơn hàng. Lưu ý rằng đơn hàng của bạn sẽ chỉ được gửi đi khi chúng tôi đã nhận được khoản thanh toán của bạn</p>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="8QV4PJHCK9HEG">
							<input class="paypal-img" type="image" src="./public/img/paypal.png"  name="submit" alt="PayPal - The safer, easier way to pay online!" style="width:200px;height:50px;object-fit: cover;">
							<!--<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col mb-2">
                <div class="row custom-btn">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light custom-btn-back">Tiếp tục mua sắm</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn-paying btn btn-lg btn-block btn-success text-uppercase custom-btn-order">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>
    <?php require_once "./mvc/views/blocks/Footer.php" ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script language="javascript" src="./public/js/checkuserlogin.js"></script>
    <script language="javascript" src="./public/js/cart.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <!-- <script language="javascript" src="../public/js/order.js"></script> -->
    <script language="javascript" src="./public/js/insertorder.js"></script>
    <script language="javascript" src="./public/js/order.js"></script>
    
    <script language="javascript" src="./public/js/payingdescryption.js"></script>
    <script language="javascript" src="./public/js/customerinfovalidate.js"></script>
    
    
    
    

</body>

</html>
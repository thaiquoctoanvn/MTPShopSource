<!DOCTYPE html>
<html>

<head>
  <title>Giới thiệu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./public/css/Menustyle.css" />
  <link rel="stylesheet" href="./public/css/Footer.css" /> -->
  <link rel="stylesheet" href="./public/css/brand.css" />
</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu.php" ?>
  <?php require_once "./mvc/views/blocks/Cover.php" ?>

  <!-- Thuong hiệu -->
  <div class="container custom_container">
    <div class="row mt-4 custom_row_mt4">
      
      <!-- Sản phẩm mới -->
      <h2 class="list-product-title">Giới thiệu</h2>
      <div class="group-product custom_group">
        <div class="row custom_row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 custom_col">
            <p class="custom-introduction">
                Thành lập từ năm 2019 với mục đích tạo ra một nơi tổng hợp và hỗ trợ các thương hiệu thời trang trẻ tại Việt Nam, đặc biệt là các thương hiệu mới nổi nhưng có tiềm năng phát triển.
            </p>
            <p class="custom-introduction">
                Hiện nay, MTP vẫn đang tiếp tục hoàn thiện và phát triển về đa dạng hơn các thương hiệu cũng như mở rộng nhiều phong cách thời trang.
            </p>
            <p class="custom-introduction">
                MTP xin gửi lời cảm ơn đến tất cả những khách hàng đã, đang và sẽ ủng hộ shop trong thời gian qua và sắp tới. Cảm ơn rất nhiều !
            </p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 custom_col">
            <img src="./public/img/logo.png" style="width: 250px;">
            <div class="custom-shop-image"></div>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>
  <?php require_once "./mvc/views/blocks/Footer.php" ?>

  <!-- load jquery
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script language="javascript" src="./public/js/cart.js"></script>
  <script language="javascript" src="./public/js/search.js"></script>


  <script language="javascript" src="./public/js/loadmore.js"></script>
  <script language="javascript" src="./public/js/checkuserlogin.js"></script>
  <script language="javascript" src="./public/js/directtobrand.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
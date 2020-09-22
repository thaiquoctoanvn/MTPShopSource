<!DOCTYPE html>
<html>

<head>
  <title>Cửa hàng</title>
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
      <h2 class="list-product-title">Tất cả sản phẩm</h2>
      <div class="group-product custom_group">
        <div class="row custom_row">
          <?php
          while ($row = mysqli_fetch_array($data["All"])) {
          ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 custom_col" style="display: none">
              <div class="card custom_card">
                <a class="custom-item-color" href="#" onclick="window.location.replace('http://localhost:88/ProjectWeb/Chitietsanpham/SayHi/<?php echo $row["productId"] ?>');">
                  <img src="<?php echo "http://localhost:88/web_mvc/admin" . $row["image"] ?>" class="card-img-top custom_col_image custom-image-size" src="http://via.placeholder.com/280x280" width="100%">
                  <div class="card-body custom_card_body">
                    <p class="card-text">
                      <?php echo $row["productName"];
                      echo "<br>";
                      echo $row["price"] . " VNĐ";
                      ?>
                    </p>
                  </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="load-more-btn">
          <a href="#" class="load-more-text">Load More</a>
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
<!DOCTYPE html>
<html>

<head>
  <title>Trang Chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./public/css/Menustyle.css" />
  <link rel="stylesheet" href="./public/css/Footer.css" /> -->
  <link rel="stylesheet" href="./public/css/homeview.css" />
</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu.php" ?>
  <?php require_once "./mvc/views/blocks/slider.php" ?>

  <!-- Thuong hiệu -->
  <div class="container custom_container">
    <div class="row mt-4 custom_row_mt4">
      <h2 class="list-product-title">Thương hiệu</h2>
      <div class="group-product custom_group">
        <div class="row custom_row">
          <?php
          while ($row = mysqli_fetch_array($data["BRAND"])) {
          ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 custom-col-brand ">
              <div class="card custom-card-brand">

                <img class="card-img custom-brand-card-image custom-image-size" src="<?php echo "http://mtpmtp.000webhostapp.com//AdminWeb/admin" . $row["brandImage"] ?>" alt="Bologna" style="object-fit: cover;">

                <div class="card-img-overlay text-white d-flex flex-column justify-content-center custom-card-overlay">
                <a data-id-brand="<?php echo $row["brandId"] ?>" class="custom-item-brand-text-color brand-item" href="#">
    
                <h4 class="card-title custom-item-brand-text-color"><?php echo $row["brandName"]; ?></h4>
                    <h6 class="card-subtitle mb-2 custom-item-brand-text-color"><?php echo $row["brandDescription"]; ?></h6>
                    <p class="card-text"></p>
                    <div class="link d-flex">
                      <a href="#" class="card-link text-warning"></a>
                      <a href="#" class="card-link text-warning"></a>
                    </div>
                    </a>
                </div>
                
              </div>

            </div>

          <?php
          }
          ?>
        </div>
      </div>
      <!-- Sản phẩm mới -->
      <h2 class="list-product-title">Sản phẩm mới</h2>
      <div class="group-product custom_group">
        <div class="row custom_row">
          <?php
          while ($row = mysqli_fetch_array($data["SP"])) {
          ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 custom_col" style="display: none">
              <div class="card custom_card">
                <a class="custom-item-color" href="#" onclick="window.location.replace('https://mtpmtp.000webhostapp.com/Chitietsanpham/Product/<?php echo $row["productId"] ?>');">
                  <img src="<?php echo "https://mtpmtp.000webhostapp.com/AdminWeb/admin" . $row["image"] ?>" class="card-img-top custom_col_image custom-image-size custom-hover-image" height="auto" width="100%">
                  <div class="card-body custom_card_body">
                    <p class="card-text custom-productname">
                    <?php echo $row["productName"];?> </p>
                      <p class="custom-productprice">
                        <?php echo number_format($row["price"], 0, ',', '.')." "."VND";?>
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



</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script language="javascript" src="./public/js/cart.js"></script>
  <script language="javascript" src="./public/js/search.js"></script>

    	<script language="javascript" src="./public/js/loginvalidate.js"></script>
  <script language="javascript" src="./public/js/loadmore.js"></script>
  <script language="javascript" src="./public/js/checkuserlogin.js"></script>
  <script language="javascript" src="./public/js/directtobrand.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
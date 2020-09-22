<!DOCTYPE html>
<html>

<head>
  <title>Tìm kiếm </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../public/css/brand.css" />
  <link rel="stylesheet" href="../../public/css/footer.css" />


</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu2.php" ?>
  <?php require_once "./mvc/views/blocks/Cover2.php" ?>


  <!-- list best seller products-->
  <div class="container search-result custom-container-search">
    <div class="row mt-4 custom_row_mt4">
      <h2 class="list-product-title">Kết quả tìm kiếm</h2>
      <div class="group-product custom_group">
        <div class="row custom_row">

          <?php

          while ($row = mysqli_fetch_array($data["SP"])) {

          ?>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 custom_col">
              <div class="card custom_card">
                <a class="custom-item-color" href="http://localhost:88/ProjectWeb/Chitietsanpham/SayHi/<?php echo $row["productId"] ?>">
                  <img src="<?php echo "http://localhost:88/web_mvc/admin" . $row["image"] ?>" class="card-img-top custom_col_image custom-image-size" src="http://via.placeholder.com/280x280" width="100%">
                  <div class="card-body custom_card_body">
                    <p class="card-text">
                      <?php echo $row["productName"]; ?>
                      <p class="custom-productprice">
                        <?php echo number_format($row["price"], 0, ',', '.') . " " . "VND"; ?>
                      </p>
                    </p>
                  </div>
              </div>
            </div>

          <?php

          }
          ?>


        </div>

      </div>
    </div>
  </div>
  <!-- <div class="shopee-search-empty-result-section" id="shoppe-search-result" style="display: none;">
                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/62d2399b89039bd1dc90ca2d50d3e802.png" class="shopee-search-empty-result-section__icon">
                <div class="shopee-search-empty-result-section__title">Không tìm thấy sản phẩm nào</div>
                <div class="shopee-search-empty-result-section__hint">Hãy thử sử dụng các từ khóa chung chung hơn</div>
  </div> -->
  <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>
  <?php require_once "./mvc/views/blocks/Footer.php" ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script language="javascript" src="../../public/js/cart.js"></script>
  <script language="javascript" src="../../public/js/checkuserlogin.js"></script>
  <!-- <script language="javascript" src="../../public/js/search.js"></script> -->

  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>


</html>
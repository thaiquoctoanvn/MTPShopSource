<!DOCTYPE html>
<html>

<head>
  <title>Chi tiết sản phẩm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/chitietsanphamview.css" />
  <link rel="stylesheet" href="../../public/css/footer.css" />
  <link rel="stylesheet" href="../../public/css/menustyle.css" />


</head>

<body>
  <?php require_once "./mvc/views/blocks/Menu2.php" ?>

  <!-- list best seller products-->
  <div class="alert alert-success alert-dismissible" id="myAlert" style="display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Đã thêm vào giỏ hàng.
  </div>
  <div class="container custom-container">
    <div class="row mt-4">
      <div class="group-product custom_group">
        <?php
        $avai = "";
        while ($row = mysqli_fetch_array($data["CTSP"])) {
          if ($row["productQuantity"] > 0) {
            $avai = "Còn hàng";
          } else {
            $avai = "Tạm hết hàng";
          }
        ?>

          <div class="row custom_row_thongtinsp">
            <!-- anh dai dien -->
            <div class="col-md-6 col-12 custom_col custom_col_img">
              <img id="expandedImg" class="image" src="<?php echo "https://mtpmtp.000webhostapp.com/AdminWeb/admin" . $row["image"] ?>" width="400px" height="300px">
              <!-- anh thu vien -->
              <div class="row row-gallery">
                <div class="col-3 col-thumbnail">
                  <img class="sub-image" src="<?php echo "https://mtpmtp.000webhostapp.com/AdminWeb/admin" . $row["image"] ?>" onclick="myFunction(this);">
                </div>
                <?php
                $i = 0;
                while (($subImage = mysqli_fetch_assoc($data["BonusImage"])) && $i < 2){
                  $i++;
                ?>
                  <div class="col-3 col-thumbnail">
                    <img class="sub-image" src="<?php echo "https://mtpmtp.000webhostapp.com/AdminWeb/admin" . $subImage["path"] ?>" onclick="myFunction(this);">
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="col-md-6 col-12 custom_col custom_col_tensp">
              <div class="tenSP">
                <h3 style="margin-bottom: 1.5em;"><?php echo $row["productName"] ?></h3>
                <h3 style="margin-bottom: 1.5em;">Giá: <?php echo number_format($row["price"], 0, ',', '.') . " " . "VND"; ?></h3>
                <h6 style="margin-bottom: 1.5em;">Trạng thái: <?php echo $avai ?></h6>
                <!--<div class="row">
                  <div class="col-md-3 col-sm-3" style="padding-right: 0">
                    <h6 style="margin-bottom: 1.5em;" ">Màu sắc:</h6>
                </div>
                <div class=" col-md-9 col-sm-9" style="padding: 0">
                      <label class="radio-inline"><input type="radio" name="optradio" checked></label>
                      <label class="radio-inline"><input type="radio" name="optradio"></label>
                  </div>-->
              </div>
              <!--Nut thanh toan-->
              <div class="thanhtoan">
                <input class="soluong" type="number" value="1" min="1" max="10" step="1" />
                <!--<button type="button" class="btn btn-info custom_btn">Thêm giỏ hàng</button>-->
                <a href="#" data-id="<?php echo $row["productId"] ?>" data-name="<?php echo $row["productName"] ?>" data-price="<?php echo $row["price"] ?>" data-img="<?php echo $row["image"] ?>" data-quatity="<?php echo $row["productQuantity"] ?>" class="add-to-cart ">ADD TO CART</a>
              </div>
            </div>
          </div>
      </div>
      <!--Row hinh san pham-->
      <div class="row custom_row_motasp">
        <div class="col-md-12 col-12" class="mo-ta-sp">
          <h3 class="mo-ta-sp">Mô tả Sản Phẩm</h3>
          <div class="row custom_rowmotachitiet">
            <?php
            echo $row["productContent"];
            ?>
            <!--<table style="width:100%">
              <tr>
                <td>Màu sắc</td>
                <td>đen trắng</td>
              </tr>
              <tr>
                <td>Chất liệu</td>
                <td>vải Camvas</td>
              </tr>
              <tr>
                <td>Kích thước</td>
                <td>20x15x10 cm (Cao x Dài x Rộng)</td>
              </tr>
              <tr>
                <td>Sức chứa</td>
                <td>khoảng 5Kg</td>
              </tr>
            </table>-->
            <!--
            <div class="col-sm-3 custom_col_title_mota">
              <p>Màu sắc:</p>
              <p>Chất liệu:</p>
              <p>Kích thước:</p>
              <p>Sức chứa:</p>
            </div>
            <div class="col-sm-9">
              <p>đen trắng</p>
              <p>vải Camvas</p>
              <p>20x15x10 cm (Cao x Dài x Rộng)</p>
              <p>khoảng 5Kg</p>
            </div>
            -->
          </div>
          <!--Row mo ta san pham-->
        <?php
        }
        ?>
        </div>
      </div>
    </div>
  </div>

  <?php require_once "./mvc/views/blocks/SpecialCart.php" ?>
  <?php require_once "./mvc/views/blocks/Footer.php" ?>

  <script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      expandImg.src = imgs.src;
      expandImg.parentElement.style.display = "block";
    }
  </script>

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
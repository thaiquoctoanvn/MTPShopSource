<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="./public/css/Menustyle.css"/>



</head>
<body>
<?php require_once "./mvc/views/blocks/Menu.php"?>
<?php require_once "./mvc/views/blocks/slider.php"?>


<!-- list best seller products-->
<div class="container">
    <div class="row mt-4">
        <h2 class="list-product-title">Sản phẩm bán chạy</h2>
        <div class="group-product custom_group">
        <div class="row">
          <?php             
            while($row= mysqli_fetch_array($data["SP"]))
            {
          ?>
            
              <div class="col-md-3 col-sm-6 col-12 custom_col">
                <div class="card custom_card" >
                  <a href="http://localhost:88/ProjectWeb/Chitietsanpham/SayHi/<?php echo $row["ID"] ?>">
                 <img src="<?php echo $row["Img"] ?>" class="card-img-top custom_col_image" src="http://via.placeholder.com/280x280"  width= "100%">
                  <div class="card-body">
                    <p class="card-text"> <?php echo $row["TenAo"]; echo "<br>"; echo $row["Gia"]; ?> </p>
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

<footer class="custom_footer">
    <div>All rights reserved</div>
</footer>
<!-- load jquery
<script src="jquery-3.4.1.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>
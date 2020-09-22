<!DOCTYPE html>
<html>
<head>
	<title>Test nè </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="./public/css/Menustyle.css"/>



</head>
<body>

<?php require_once "./mvc/views/blocks/Menu.php"?>
<!-- test Slid-->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://via.placeholder.com/1920x530" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://via.placeholder.com/1920x530" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://via.placeholder.com/1920x530" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a></div>


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
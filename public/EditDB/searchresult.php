<?php
    require "connect.php";

    $productname = $_POST['productName'];
    
    $queryCheck = "SELECT * FROM tbl_product WHERE productName LIKE '%".$productname."%'";
    // $queryCheck = "SELECT * FROM tbl_product WHERE productName = 'abc'";
    $dataCheck = mysqli_query($con,$queryCheck);

    if($dataCheck -> num_rows > 0) {
        echo "found";
    } else {
        echo "not";
    }
    
?>